<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class firstcontroller extends Controller
{
    //
    public function addPost(){
        return view('first');
    }
    public function savePost(Request $req){
DB::table('firsts')->insert([
    'name'=>$req->name,
    'description'=>$req->description


]);
// return back()->with('post_add', 'post added successfully');
        return view('first');
    }
    public function postList(){
        $posts=DB::table('firsts')->get();
        return view('seefirst',  compact('posts'));
    }
    public function editpost($id){
        $post=DB::table('firsts')->where('id', $id)->first();
        return view('editpost',  compact('post'));
    }
    public function updatepost(Request $req){
        $post=DB::table('firsts')->where('id', $req->id)->update([
            'name'=> $req->name,
            'description'=>$req->description
        ]);
        return view('first1');
    }

    public function deletepost(Request $req){
        $post12=DB::table('firsts')->where('id', $req->id)->delete();
        
    }
}
