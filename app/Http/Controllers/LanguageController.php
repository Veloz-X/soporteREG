<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class LanguageController extends Controller
{
    public function langJs(Request $request)
    {
        $file = $request->route()->getAction()['file'];
        
        if(defaultSetting('app_env') === 'development'){
            $strings = $this->getLang($file);
        } else {
            $strings = Cache::rememberForever(config('vars.asset_version').$file.'_lang.js', function () use ($file){
                return $this->getLang($file);
            });
        }

        header('Content-Type: text/javascript');
        echo('window.i18n = ' . json_encode($strings) . ';');
        exit();
    }

    private function getLang($file){
        $lang = app()->getLocale();
        $jsLangFile = resource_path('lang/' . $lang . '/'.$file.'.php');

        if(file_exists($jsLangFile)){
            return require $jsLangFile;
        }
    
        return [];
    }

    public function languages()
    {
        return availableLanguages();
    }
}
