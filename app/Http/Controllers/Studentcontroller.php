<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class Studentcontroller extends Controller
{
    //
    function store(Request $req){
       $student= new Student;
        $student->cne=$req->name;
        $student->firstname=$req->name; 
        $student->lastname=$req->name;
        $student->age=$req->name; 
        $student->speciality=$req->name; 
        $student->save();



    }
}
