<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('DashBord');
});
Route::get('projects' , [ProjectsController::class , 'ViewPage']);
Route::get('projects/create' , [ProjectsController::class , 'create']);
Route::get('tags' , [TagController::class , 'viewtag']);
Route::get('tags/create' , [TagController::class , 'create']);
