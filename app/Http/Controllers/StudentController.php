<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    // function show(){
    //     return "list of students";
    // }

    // function add(){
    //     return"added students";
    // }

    // function delete(){
    //     return"deleted students";
    // }

function users(){
    // return "users";
    return DB::select("select * from student");
}


}
