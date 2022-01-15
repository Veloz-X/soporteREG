<?php 

// a group with locale prefix
Route::pattern('locale', '[a-z]{2}');
Route::group(['prefix' => '{locale}', 'as' => '_'], function() {
    require base_path().'/routes/web.php';
});

// a group with empty prefix
Route::group([], function() {
    require base_path().'/routes/web.php';
});
