<?php

Route::middleware('auth:api')->get('/projects', function (Request $request) {
    return $request->user();
});
