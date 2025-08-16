<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    function getUser(){
        //return "swikriti";
        return view('user');
    }

    function aboutUser(){
        return"hello";
    }

    function getUserName($name){
        //return $name;
        return view('getuser',['name'=>$name]);
    }
function adminLogin(){
    return view('admin.login');
}

function getContact(){

    return view('contact');
}

function getAdmin(){
    return view('admin.login');
}

function getContacts($name){

    if(View::exists('contact')){
    return view('contact',['user'=>$name]);
}else{
echo"No view found";
}
}

function getUsers(){
    $name= "swikriti";
    return view('contact',['user'=>$name]);


}

function getHeader(){
    $page="header";
    $name="sam";
    $users=['swikriti','suks','suru'];

    return view('common.header',['msg'=>"hii im in $page","user"=>$users,"name"=>$name]);
}


}
