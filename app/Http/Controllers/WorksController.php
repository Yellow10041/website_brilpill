<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MyWorks;

class WorksController extends Controller
{
    public function worksFindCategory($category) {
        $data = MyWorks::where('category', $category)->get();
        return $data;
    }

    public function worksFindID($id) {
        $data = MyWorks::where('id', $id)->get();
        return $data;
    }

    public function works(Request $request, $category) {
        $data = MyWorks::where('category', $category)->get();
        
        $price = 0;

        

        if(isset($request->all)) {
            if ($request->all == "ALL") {
                $data = $data->sortBy('year')->reverse();;
            }
            else if ($request->all == "PREMIUM") {
                $data = $data->where('price');
                // dd($dataStatus);
            }
            else if ($request->all == "FREE") {
                $data = $data->whereNull('price');
            }

            if ($request->new == "NEW") {
                $data = $data->sortBy('year')->reverse();
                
            }
            else {
                $data = $data->sortBy('year');
                
            }
        }

        if(isset($request->price)) {
            if ($request->price == 2) {
                $data = collect($data)->sortBy('price')->reverse();
                $price = 2;
            }
            else if ($request->price == 1) {
                $data = collect($data)->sortBy('price');
                $price = 1;
            }
        }
        


        
        if ($request->ajax() ) {
            
            $viewRender = view('inc.post-default', [
                'posts' => $data
            ])->render();
            return [$viewRender, $price];
            // return ['data' => $data, 'category' => $category, 'all' => $request->all, 'new' => $request->new];
        }





        return view('works', ['data' => $data, 'category' => $category, 'all' => $request->all, 'new' => $request->new, 'price' => $price]);
    }

    public function projectView($category, $id) {
        return view('projectView', ['data' => WorksController::worksFindID($id)]);
    }

    public function worksSorts(Request $request, $category) {
        // вибірка всіх проєктів по категорії
        $data = MyWorks::where('category', $category);
        
        // перевірка проєктів на доступність
        if ($request->all == "ALL") {
            $data = $data->get();
        }
        else if ($request->all == "PREMIUM") {
            $data = $data->where('price', '<>', '')->get();
        }
        else if ($request->all == "FREE") {
            $data = $data->whereNull('price')->get();
        }

        // перевірка проєктів на актуальність
        if ($request->new == "NEW") {
            $data = collect($data)->sortBy('year')->reverse();
            
        }
        else if ($request->new == "OLD") {
            $data = collect($data)->sortBy('year');
            
        }

        // відсилання результатів за ajax запитом
        if ($request->ajax() ) {
            return ['data' => $data, 'category' => $category, 'all' => $request->all, 'new' => $request->new];
        }

        // $datas = collect($data)->sortBy('year')->reverse();
        // $yearFirst = $datas->first()->year;
        // $yearArr = [$yearFirst];
        // foreach ($datas as $years) {
        //     if ($yearFirst != $years->year) {
        //         $yearFirst = $years->year;
        //         $yearArr[] = $years->year;
        //     }
        // }
        // $dataFinish;
        // foreach ($yearArr as $year) {
        //     $dataFinish[] = collect($data)->where('year', $year)->sortBy('price')->reverse();
        // }

        // відсилання результатів за запитом, на сторінку перегляду
        return view('works', ['data' => $data, 'category' => $category, 'all' => $request->all, 'new' => $request->new]);
    }

    public function worksSortsPrice(Request $request, $category) {
        $data = MyWorks::where('category', $category)->get();
        // dd($request->price);
        if ($request->price == 2) {
            $dataFinish = collect($data)->sortBy('price')->reverse();
            $price = 1;
        }
        else {
            $dataFinish = collect($data)->sortBy('price');
            $price = 2;
        }
        return view('works', ['data' => $dataFinish, 'category' => $category, 'price' => $price]);
    }
}
