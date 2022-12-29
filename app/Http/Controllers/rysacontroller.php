<?php

namespace App\Http\Controllers;

use App\Models\Rysa;
use Illuminate\Http\Request;


class rysacontroller extends Controller
{
    //
    function send(Request $req){
     
           
            $req->validate([
                'name'=>'required|min:6', 
                'skill'=>'required| max:10'
            ]);
       
        $rysa= New Rysa;
        
        $rysa->name= $req->name;
        $rysa->phonenumber= $req->phonenumber;
        $rysa->skill= $req->skill;
        $rysa->vision= $req->vision;
        $rysa->mission= $req->mission;
        $rysa->save();


        return view('rysa');

    }
    function view(){
$data= rysa::all();

return view('rysa1', ['info'=>$data]);
    }
    function edit(){
        
    }
}
