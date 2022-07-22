<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class HomeController extends Controller
{
    public function view() {
        $posts = Post::get();

        return view('home', ['posts' =>  $posts]);
    }
}
