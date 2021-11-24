<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\user;
use App\models\address;
use App\models\post;
use App\models\tag;
class aboutController extends Controller
{
    //
  public function index($name){
        return view("about",['name'=>$name]);
    }

    function loginPage(){
        if(session()->has("username")){
            return redirect("/");
        }
        return view("login");
    }
    function login(Request $req){
       
        $req->validate([
            "username"=>"required",
            "password"=>"required",
        ]);
       
        $data = $req->username;
         $req->session()->put('username', $data);
          session()->flash('success');
        return redirect("/");
    }

    function blog(){
        return user::all();
    }

    public function logout(Request $req){
        if(session()->has('username')){
            $req->session()->pull('username');

        }
        return redirect("loginPage");

}
function upload(Request $req){
$req->file("file")->store("doc");
$req->session()->flash('success', "image uploded successfully");
return redirect("upload");
}

function user(){
    $users = user::all();
    return view("relation.user",compact(['users']));
    // $addresses = address::all();
    // return view("relation.user",compact(['addresses']));
}

function post(){
    // $posts = Post::all();
    // return view("posts.index",compact(['posts']));
     $users = user::all();
    return view("posts.index",compact(['users']));
   
}

function tag(){
   
    //  $posts = post::with("user","tags")->get();
    // return view("posts.manytomany",compact(['posts']));
    $tags = tag::all();
    return view("posts.manytomany",compact(['tags']));
   
}

}
