<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
//use Illuminate\Support\Collection;
//use Illuminate\Support\Facades\Collection;

class Post extends Controller
{

    public function index()
    {

        $posts = Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        $collection = collect($posts);
        $uniqueUserIds=$collection->unique('userId');
        $countUnique=$collection->countBy('userId');

        //dump($countUnique);
        //$total_count=$collection->countBy('id');
        //$chunk=$collection->take('10');
        //$last=$collection->last();
        //dd($posts);
        //dd($collection);
        //dd($uniqueUserIds);
        //dd($count);
        //dd($total_count);
        //echo 'return N items from json data = '.'<br>';
        //dd($chunk);
        //dd($last);
        return view('index',[
            'uniqueUserIds'=>$uniqueUserIds,
            'countUnique'=>$countUnique
        ]);
    }

    public  function  show($id){
        $posts=Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        $collections=collect($posts)->where('userId', $id);
        return view('show',[
            'collections'=>$collections,
            'id'=>$id
        ]);
    }
}
