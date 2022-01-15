<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Module;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Redirect;

class ModulesManagerController extends Controller
{
    public function index()
    {
        abort_unless( Auth::User()->can('list_modules'), 403);
        return view('dashboard.modules_manager.index');
    }

    public function list()
    {
        abort_unless( Auth::User()->can('list_modules'), 403);
        return Module::list();
    }

    /**
     * enable the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function toggleModuleStatus(Request $request, $module)
    {
        abort_unless( Auth::User()->can('manage_modules'), 403, __("You don't have permission to perform this action"));

        $m = Module::find($module);

        if( ! $m ){
            abort(404, __('Module :module_name not found', ['module_name' => $module]));
        }

        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        Artisan::call('config:clear');

        if( $m->isEnabled() ){
            $m->disable();
            $isEnabled = false;
        } else {
            $m->enable();

            if( file_exists(base_path("Modules/".$m->getName()."/Entities/Activate.php")) ){
                $ModuleActivate = "\Modules\\".$m->getName()."\Entities\Activate"; 
                $ModuleActivateInstance = new $ModuleActivate();
                $ModuleActivateInstance->run();
            }

            $isEnabled = true;
        }

        if(config('app.env') === 'production'){
            Artisan::call('route:cache');
            Artisan::call('view:cache');
            Artisan::call('config:cache');
            Artisan::call('optimize');
            Artisan::call("storage:link");
        }
        
        return [
            'status' => 'success',
            'module' => $module,
            'is_enabled' => $isEnabled,
            'message' => __('Module :module_name has been :new_status', ['module_name' => $m, 'new_status' => $isEnabled ? __('Enabled') : __('Disabled')])
        ];
    }

    public function moduleThumbnail($module)
    {
        return Module::getModuleThumbnail($module);
    }
}
