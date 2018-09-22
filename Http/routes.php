<?php

foreach(['my', 'admin'] as $prefix){

    Route::group([
        'prefix'        => $prefix,
        'middleware'    => ['web', 'Admin'],
        'namespace'     => 'Admin\Projects\Http\Controllers'],
        function(){
            Route::resource('projects', ProjectsController::class);
        });
}
