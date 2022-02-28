<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CargoController extends Controller
{
    private $posts;

    public function __construct()
    {
        echo '<pre>'.'construct'.'</pre>';
        $json = Http::get('https://api.cargo.tech/v1/cargos')->json();
        $this->posts = collect($json['meta']);
        //$this->posts = collect($json['meta']['data'][0]);

        var_dump($this->posts);
        //$this->posts = collect($json['data']);
    }

       public  function show()
    {
        echo 'show';
        //$json = Http::get('https://api.cargo.tech/v1/cargos')->json();
        //$json = collect($json);
        //var_dump(json);
        //$posts = collect($json['data']);

        //dd($posts);

        //return $posts;

    }

    public  function index()
    {
        echo 'kfjkgj';
        //return $this->posts;
        /*
        return view('cargo.index', [
            'posts' => $this->posts
        ]);*/
    }


}
