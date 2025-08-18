<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserrController extends Controller
{
    // function addUser(Request $request){
    //     // return $request;
    //     echo "username is: $request->username";
    //     echo"<br>";
    //     echo $request->address;
    //     echo"<br>";
    //     echo $request->email;
       
    // }


    function adduser(Request $request){
        // return $request;
        // echo $request->city;
        // echo"<br>";
        // echo $request->gender;
        // echo"<br>";
        // print_r($request->skill);

    $request->validate([
        'username'=>'required',
        'email'=>'required',
        'address'=>'required',
        'skill'=>'required'

    ]);

    }


// function show(){
//     // return view('home');
// // return redirect()->to('home/profilr/user');
// return to_route('hm');

// }
// function user(){
//     // return view('home');
// // return redirect()->to('home/profilr/user');
// return to_route('user',["name"=>"suks"]);

// }

function show(){
    return "student list";
}

function add(){
    return "add new student";
}

}
