<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class PageController extends Controller
{
    //
    public function showHome(){
        // return "<h1>Welcome to Controller Function</h1>";
        return view('welcome');
    }
    
    public function showUser(String $id){
        // return "<h1>Welcome to Controller Function</h1>";
        return view('user', compact('id'));
    }

    public function showBlog(){
        // return "<h1>Welcome to Controller Function</h1>";
        return view('blog');
    }
}
