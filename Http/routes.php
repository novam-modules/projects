<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Admin\Projects\Http\Controllers'], function()
{
    Route::resource('projects', ProjectsController::class);
});
