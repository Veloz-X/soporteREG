<?php

namespace App\Http\Controllers\Dashboard;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Artisan;

class UpdateController extends Controller
{
    public function update(Request $request)
    {
        abort_unless(Auth::user()->can('update_application'), 403);

        $file = storage_path('/app/'.$request->input('file'));
        
        if( ! file_exists( $file ) || !is_file( $file )){
            return ['status' => 'fail', 'message' => __('Update file not found')];
        }

        $zip = new \ZipArchive;
        $res = $zip->open( $file );
        if (!$res )  return ['status' => 'fail', 'message' => __('Invalide update file')];

        // Clear update folder
        $filesystem = new Filesystem;
        $filesystem->cleanDirectory( storage_path('/app/update/extracted') );

        $zip->extractTo( storage_path('/app/update/extracted') );

        // check if valid update
        if( 
            !file_exists( storage_path('/app/update/extracted/app') ) ||
            !file_exists( storage_path('/app/update/extracted/bootstrap') ) ||
            !file_exists( storage_path('/app/update/extracted/config') ) ||
            !file_exists( storage_path('/app/update/extracted/routes') ) ||
            !file_exists( storage_path('/app/update/extracted/public') ) ||
            !file_exists( storage_path('/app/update/extracted/public/index.php') )
        ){
            $filesystem->cleanDirectory( storage_path('/app/update') );
            return ['status' => 'fail', 'message' => __('Invalide update file')];
        }

        // Turn on debug mode 
        Setting::add('app_debug', 1);

        Artisan::call('down', ['--message' => __("The site is down for maintenance")]);

        // Disable cache
        Artisan::call("cache:clear");
        Artisan::call("route:clear");
        Artisan::call("view:clear");
        Artisan::call("config:clear");

        $zip->extractTo( base_path() );
        $zip->close();

        Artisan::call('up');

        $filesystem->cleanDirectory( storage_path('/app/update') );

        return ['status' => 'ok', 'message' => __('Successfully updated')];
    }

    public function resetAppAfterUpdate()
    {
        abort_unless(Auth::user()->can('update_application'), 403);

        // Delete previous version translation folder
        $translationVendor = resource_path('views/vendor/translation');
        if (File::exists($translationVendor)) File::deleteDirectory($translationVendor);

        Artisan::call("package:discover", ['--ansi' => true ]);
        
        Artisan::call("cache:clear");
        Artisan::call("route:clear");
        Artisan::call("view:clear");
        Artisan::call("config:clear");
        Artisan::call("optimize");
        Artisan::call("storage:link");
        Artisan::call("view:cache");
        Artisan::call('migrate', ['--force' => true ]);
        Artisan::call('db:seed', ['--class' => 'RolesAndPermissionsSeeder', '--force' => true]);

        return ['status' => 'ok', 'message' => __('Application has been refreshed')];
    }
}