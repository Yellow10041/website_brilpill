<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WorksAddRequest;

use App\Models\MyWorks;
use App\Models\Post;

use Illuminate\Support\Facades\Auth;

use Image;

class WorksAddController extends Controller
{
    public function worksAdd(WorksAddRequest $request) {
        if(Auth::user()) {
            $work = new MyWorks();

            $imgName = date("Y-m-d-H-i-s", time()) . "." . $request->image->GetClientOriginalExtension();

            $work->name = $request->name;
            $work->img = $imgName;
            $work->category = $request->category;
            $work->main_tag = $request->main_tag;
            $work->tags = $request->tags;
            $work->description = $request->description;
            $work->year = $request->year;
            $work->price = $request->price;
            $work->link = $request->link;
            $work->save();

            $img = $request->file("image");
            Image::make($img)->save( public_path("img/works/" . $imgName));

            return redirect()->route('admin');
        }
        else {
            return redirect()->route('login');
        }
    }

    public function work_change (Request $request) {
        if(Auth::user()) {
            // перевірка наявності нового зображення
            if(isset($request->image)) {
                // створення назви зображення по теперішній даті та розширення зображення
                $imgName = date("Y-m-d-H-i-s", time()) . "." . $request->image->GetClientOriginalExtension();

                // пошук проєкту, який потрібно замінити та зміна даних його полів
                MyWorks::where('id', $request->id)->update([
                    'name' => $request->name,
                    'img' => $imgName,
                    'category' => $request->category,
                    'main_tag' => $request->main_tag,
                    'tags' => $request->tags,
                    'description' => $request->description,
                    'year' => $request->year,
                    'price' => $request->price,
                    'link' => $request->link
                ]);
        
                // витягнення зображення з запиту
                $img = $request->file("image");

                // створення зображення та його збереження в каталог за замовчуванням
                Image::make($img)->save( public_path("img/works/" . $imgName));
            }
            // якщо нового зображення немає, то виконується наступний блок
            else {
                // пошук проєкту, який потрібно замінити та зміна даних його полів
                MyWorks::where('id', $request->id)->update([
                    'name' => $request->name,
                    'category' => $request->category,
                    'main_tag' => $request->main_tag,
                    'tags' => $request->tags,
                    'description' => $request->description,
                    'year' => $request->year,
                    'price' => $request->price,
                    'link' => $request->link
                ]);
            }
            
            // переадресація на сторінку панелі адміністратора
            return redirect()->route('admin');
        }
        else {
            return redirect()->route('login');
        }

        
    }

    public function work_delete ($id) {
        if(Auth::user()) {
            MyWorks::where('id', $id)->delete();
            Post::where('work_id', $id)->delete();

            return redirect()->route('admin');
        }
        else {
            return redirect()->route('login');
        }
    }
}
