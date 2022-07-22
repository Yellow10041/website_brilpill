<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MyWorks;
use App\Models\Post;
use App\Models\News;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login (Request $request) {
        if(Auth::user()) {
            return redirect()->route('login');
        }
        else {
            $user = $request->only(['login', 'password']);
            if(Auth::attempt($user)) {
                return redirect()->route('admin');
            }
            dd(0);
        }
    }

    public function view (Request $request) {
        if(Auth::user()) {
            $works =  MyWorks::get();

            $news = News::get();

            $post = MyWorks::where('id', $request->id)->get()->first();

            $posts = Post::get();

            return view('admin', [
                'works' => $works,
                'news' => $news,
                'post' =>  $post,
                'posts' =>  $posts
            ]);
        }
        else {
            return redirect()->route('login');
        }
        
    }

}
