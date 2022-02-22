<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CargoController extends Controller
{
       public  function test()
    {
        $json = Http::get('https://api.cargo.tech/v1/cargos')->json();
        $posts = collect($json);
        //$posts = collect($json['data']);

        dd($posts);

        return $posts;

    }

    public  function index()
    {
            }


}
