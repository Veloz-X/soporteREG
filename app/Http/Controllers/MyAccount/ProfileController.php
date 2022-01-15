<?php

namespace App\Http\Controllers\MyAccount;

use App\User;
use App\Rules\AlphaSpaces;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('my_account.index', ['user' => $user]);
    }

    public function profile(Request $request)
    {
        $user = Auth::user();

        if ($request->isMethod('post'))
        {

            if( isDemo() ){
                session()->flash('danger', 'This feature has been disabled on demo version');
                return view('dashboard.profile.index', ['user' => $user]);
            }

            // Update profile
            $rules = array();
            if($user->email != $request->input('email')){
                $rules['email'] = 'required|unique:users|email|max:255|string';
            }

            if($user->name != $request->input('name')){
                $rules['name'] =  ['required', 'max:255', new AlphaSpaces];
            }

            if($user->signature != $request->input('signature')){
                $rules['signature'] = 'max:255';
            }

            if($user->locale != $request->input('locale')){
                $rules['locale'] = ['required', 'in:'.implode(',', array_keys(availableLanguages()))];
            }

            if($request->input('password')){
                $rules['current_password'] = 'required';
                $rules['password'] = 'required|string|min:8|confirmed';
            }
            
            if(count($rules)){
                $request->validate($rules);
                $user->name = $request->input('name');
                $user->email = $request->input('email');
                $user->locale = $request->input('locale');
                $user->signature = trim($request->input('signature'));

                if($request->input('password')){
                    if (!Hash::check($request->input('current_password'), $user->password)) {
                        session()->flash('danger', __('Current password does not match'));
                        return view('my_account.profile.index', ['user' => $user]);
                    }
                    
                    $user->password = Hash::make($request->input('password'));
                }

                $user->save();
                session()->flash('status', __('Your profile has been updated successfully'));
            }
        }
        return view('my_account.profile.index', ['user' => $user]);
    }

}
