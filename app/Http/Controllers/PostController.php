<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
//use Illuminate\Support\Collection;

class PostController extends Controller
{
    public function index()
    {
        $posts = Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        $collection = collect($posts);
        $uniqueUserIds=$collection->unique('userId');
        //dd($posts);
        //dd($collection);
        dd($uniqueUserIds);
        return view('index');
    }
}
