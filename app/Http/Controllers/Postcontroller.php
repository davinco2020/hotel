<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Postcontroller extends Controller
{
    //
    public function addPost(){

        return view('add-post');
    }
    public function savePost(Request $req){

        DB::table('posts')->insert([
            'name'=>$req->name,
            'description'=>$req->description
        ]);
        return back()->with('post_add', 'Post added successfully');
    }
}
