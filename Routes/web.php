<?php

foreach(user_routes() as $prefix){

    Route::prefix($prefix)->group(function() {
        Route::resource('projects', ProjectsController::class);
    });
}
