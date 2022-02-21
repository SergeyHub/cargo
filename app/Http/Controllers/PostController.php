<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
//use Illuminate\Support\Collection;
//use Illuminate\Support\Facades\Collection;

class PostController extends Controller
{


    public function index()
    {
        $posts = Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        $collection = collect($posts);
        //$uniqueUserIds=$collection->unique('userId');
        //$count=$collection->countBy('userId');
        //$total_count=$collection->countBy('id');
        //$chunk=$collection->take('10');
        $last=$collection->last();
        //dd($posts);
        //dd($collection);
        //dd($uniqueUserIds);
        //dd($count);
        //dd($total_count);
        //echo 'return N items from json data = '.'<br>';
        //dd($chunk);
        dd($last);
        return view('index');
    }
}
