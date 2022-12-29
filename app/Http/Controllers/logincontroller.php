<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    //
    function getdata(Request $req){
        $req->validate([
            'username'=>'required|min:6', 
            'password'=>'required| max:10'
        ]);

        $title ='Davinco Tech SOlutions Ltd';
        $description= 'We are a tech company whose relevance spands beyond continent';

        $david= [
            'name'=>'David Ogochukwu Nwoye',
            'school'=>'Ebonyi STate University',
            'age'=>'31'
        ];
        // if($req->username =='david'){
        //     return view('rysa');
        // }
        // else {
        //     return 'type the correct username';
        // }
        // return $req->input();
       
       //compact method
        // return view('loginview', compact('title', 'description'));
        //with method 
        return view('loginview', ['dave'=> $david ]);

    
    }
    function show($name){
     
        $data = [
            'iphone' => 'iPhone',
            'samsung' => 'Samsung', 
        ];
        return view('products.index', [
            'products'=>$data[$name ] ?? 'product '.$name. ' dodes not exist'
        ]);

    }
    function lesson(){
        $names= ['david', 'michael', 'john', 'obi'];
        return view('loginview', [
            'name'=>$names
        ]);
    }
}
