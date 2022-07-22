<?php

namespace App\Http\Controllers;

use App\Models\News;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function create() {
        if(Auth::user()) {
            $post = new News();
            $post->text = 'News text';
            $post->save();

            return redirect()->route('admin');
        }
        else {
            return redirect()->route('login');
        }
    }

    public function delete($id) {
        if(Auth::user()) {
            News::where('id', $id)->delete();

            return redirect()->route('admin');
        }
        else {
            return redirect()->route('login');
        }
    }

    public function change(Request $request) {
        if(Auth::user()) {
            for($i = 1; $i <= 2; $i++) {
                $text = 'news' . $i;
                News::where('id', $i)->update([
                    'text' => $request->$text
                ]);
            }
    
            return redirect()->route('admin');
        }
        else {
            return redirect()->route('login');
        }
        
    }
}
