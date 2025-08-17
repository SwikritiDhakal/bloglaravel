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
}
