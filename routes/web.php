<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HostController;
use App\Http\Controllers\PostController;

Route::get('/hello', HomeController::class);
Route::get('post/mensaje', [PostController::class, #Controlador seguido del método Mnensaje
'Mensaje']);
Route::get('post/about/{param}/{name?}', [PostController::class, 'About']);


#Route::get('/', function () {
#  return view('welcome');
#});
