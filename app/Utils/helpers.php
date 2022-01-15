<?php

if (! function_exists('setting')) {

    function setting($key, $default = null)
    {
        if (is_null($key)) {
            return new \App\Setting();
        }

        if (is_array($key)) {
            return \App\Setting::set($key[0], $key[1]);
        }

        $value = \App\Setting::get($key);

        return is_null($value) ? value($default) : $value;
    }
}

if (! function_exists('flushSessions')) {
    function flushSessions(){
        $directory = storage_path('framework/sessions');

        $ignoreFiles = ['.gitignore', '.', '..'];

        if(file_exists($directory)){
            $files = scandir($directory);

            foreach ( $files as $file ) {
                if( !in_array($file,$ignoreFiles) ) {
                    unlink($directory . '/' . $file);
                }
            }
        }
        
    }
}

if (! function_exists('isAppInstalled')) {
    function isAppinstalled(){
        return file_exists( storage_path('app/app_installed') );
    }
}

if (! function_exists('defaultSetting')) {
    function defaultSetting($item, $default = null){
        $sfc = config_path('settings.php');
        if(file_exists($sfc)){
            $settings = include $sfc;
            if($settings) return isset($settings[$item]) ? $settings[$item] : $default; 
            return $default;
        }
        return $default;
    }
}

if (! function_exists('isSSLEnabled')) {
    function isSSLEnabled(){
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
           return true;
        }
        
        if (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
            return true;
        }
        
        return false;
    }
}

if (! function_exists('getLocaleName')) {
    function getLocaleName($lang){
        if(\Illuminate\Support\Facades\Lang::has('language_name', $lang)){
            return \Illuminate\Support\Facades\Lang::get('language_name', [], $lang) ;
        }
        return $lang;
    }
}

if (! function_exists('availableLanguages')) {
    function availableLanguages(){
        $langs = array_diff(scandir(resource_path('lang')), array('..', '.'));
        $lnames = [];
        foreach($langs as $l){
            if($l != 'vendor' && is_dir(resource_path('lang/').$l)){
                $lnames[$l] = ucwords(getLocaleName($l));
            }
        }
        return $lnames;
    }
}

if (! function_exists('gtCurrentURL')) {
    function gtCurrentURL(){
        return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }
}

if (! function_exists('isDemo')) {
    function isDemo(){
        return config('settings.demo') === true ? true : false;
    }
}

if (! function_exists('disableInDemo')) {
    function disableInDemo(){
        if( isDemo() ) exit('Feature disabled on demo Version');
    }
}


if (! function_exists('diskSettings')) {
    function diskSettings($driver, $root, $visibility = 'public'){
        if($driver == "s3"){
            return [
                'driver' => "s3",
                'root' => $root,
                'key' => defaultSetting('AWS_ACCESS_KEY_ID'),
                'secret' => defaultSetting('AWS_SECRET_ACCESS_KEY'),
                'region' => defaultSetting('AWS_DEFAULT_REGION'),
                'bucket' => defaultSetting('AWS_BUCKET'),
                'visibility' => $visibility
            ];
        }

        if($driver == "local"){
            return [
                'driver' => "local",
                'root' => storage_path('app/public/'.$root),
                'url' => defaultSetting('app_url').'/storage/'.$root,
                'visibility' => $visibility
            ];
        }

        return false;
    }
}

if (! function_exists('isRTL')) {
    function isRTL($locale){
        return in_array($locale, ['ar','arc','dv','fa','ha','he','khw','ks','ku','ps','ur','yi']) ? true : false;
    }
}

if (! function_exists('OAuthProviders')) {
    function OAuthProviders(){
        $providers = [];

        if(setting('envato_oauth_enabled', false)) $providers[] = 'envato';
        if(setting('google_oauth_enabled', false)) $providers[] = 'google';
        if(setting('facebook_oauth_enabled', false)) $providers[] = 'facebook';
        
        return $providers;
    }
}

if (! function_exists('isOAuthEnabled')) {
    function isOAuthEnabled(){

        if(setting('envato_oauth_enabled', false)) return true;
        if(setting('google_oauth_enabled', false)) return true;
        if(setting('facebook_oauth_enabled', false)) return true;
        
        return false;
    }
}

if (! function_exists('backendMenu')) {
    function backendMenu($type){
        $menu = config('menu');
        if( ! isset($menu[$type]) ) return [];
        $m = collect($menu[$type])->sortBy('order')->toArray();
        return $m;
    }
}

if (! function_exists('customStyle')) {
    function customStyle($type){
        if( $type == 'frontend'){
            if( file_exists( public_path('assets/frontend/css/style.css') ) ){
                return "<link href='".asset('assets/frontend/css/style.css?v=').config('vars.asset_version')."' rel='stylesheet'>";
            }
        }
    }
}

if (! function_exists('customFields')) {
    function customFields($model, $location){
        $customFields = config('custom_fields');
        if( ! isset( $customFields[$model] ) ) return [];

        $fields = [];

        foreach ($customFields[$model] as $field) {
            if( isset($field['location']) && $field['location'] == $location){
                $fields[] = $field;
            }
        }

        return $fields;
    }
}