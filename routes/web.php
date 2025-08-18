<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserrController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users',[StudentController::class,'users']);

// Route::view('home','home')->middleware('check1');
// Route::view('about','about')->middleware('check1');

// Route::middleware('check1')->group(function(){
// Route::view('home','home')->middleware('check1');
// Route::view('about','about')->middleware('check1');
// });

// Route::view('home','home')->middleware([AgeCheck::class, CountryCheck::class]);


// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/user',[UserController::class,'getUser']);
//Route::redirect('/home','/');

// Route::get('/about',[UserController::class,'aboutUser']);

// Route::get('user/{name}',[UserController::class,'getUserName']);

// Route::get('admin',[UserController::class,'adminlogin']);

//only for view not for controller
// Route::view('/home','home');
// Route::view('/','welcome');

//Route::view('/contact','contact');
//  Route::get('contact',[UserController::class,'getContact']);

//  Route::get('admin/',[UserController::class,'getAdmin']);

// Route::get('/about/{name}',function($name){
    // return view ('about',["name"=>$name]);

// });

// Route::get('contact/{name}',[UserController::class, 'getContacts']);

// Route::get('common.header',[UserController::class,'getHeader']);


Route::view('/user-form','user-form');
// Route::post('adduser',[UserrController::class,'addUser']);

Route::view('/user-form-control','user-form-control');
Route::post('addUserController',[UserrController::class,'adduser']);


//............named routes
// Route::view('about','about');
// Route::view('home/user/profile','home')->name('hm');
// Route::view('home/profile/{name}','home')->name('user');
// Route::get('show',[UserrController::class,'show']);
// Route::get('user',[UserrController::class,'user']);


//............prefix grouping


// Route::prefix('student')->group(function(){
// Route::view('home','home');
// Route::get('/show',[UserrController::class,'show']);
// Route::get('/add',[UserrController::class,'add']);
// });


//grouping controller



// Route::controller(StudentController::class)->group(function(){
//     Route::get('show','show');
//     Route::get('add','add');
//     Route::get('delete','delete');
// });