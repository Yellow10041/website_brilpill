<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\MyWorks;

use Illuminate\Support\Facades\Auth;

use Image;

class PostController extends Controller
{
    public function create() {
        if(Auth::user()) {
            $post = new Post();
            $post->save();

            return redirect()->route('admin');
        }
        else {
            return redirect()->route('login');
        }
    }

    public function delete($id) {
        if(Auth::user()) {
            Post::where('id', $id)->delete();

            return redirect()->route('admin');
        }
        else {
            return redirect()->route('login');
        }
    }

    public function check($id) {
        $post = Post::where('id', $id)->get()->first();

        return $post;
    }

    public function geometry_get($geometry_id) {
        $geometry = view('inc.geometry.geometry_item_' . $geometry_id)->render();

        return $geometry;
    }

    public function work_get($work_id) {
        $work = MyWorks::where('id', $work_id)->get()->first();

        return $work;
    }

    public function change(Request $request) {
        if(Auth::user()) {
            if(isset($request->image)) {
                $imgName = 'mockup_' . $request->post_id . "." . $request->image->GetClientOriginalExtension();
    
                $work = Post::where('id', $request->post_id)->update([
                    'work_id' => $request->work_id,
                    'geometry' => $request->geometry,
                    'mockup' => $imgName,
                ]);
        
                $img = $request->file("image");
                Image::make($img)->save( public_path("img/mockups/" . $imgName));
            }
            else {
                $work = Post::where('id', $request->post_id)->update([
                    'work_id' => $request->work_id,
                    'geometry' => $request->geometry,
                ]);
            }
    
            return redirect()->route('admin');
        }
        else {
            return redirect()->route('login');
        }
    }
}
