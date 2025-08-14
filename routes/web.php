<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/user',[UserController::class,'getUser']);
//Route::redirect('/home','/');

Route::get('/about',[UserController::class,'aboutUser']);

Route::get('user/{name}',[UserController::class,'getUserName']);

Route::get('admin',[UserController::class,'adminlogin']);

//only for view not for controller
// Route::view('/home','home');
// Route::view('/','welcome');

//Route::view('/contact','contact');
 Route::get('contact',[UserController::class,'getContact']);

 Route::get('admin/',[UserController::class,'getAdmin']);

Route::get('/about/{name}',function($name){
    return view ('about',["name"=>$name]);

});

Route::get('contact/{name}',[UserController::class, 'getContacts']);