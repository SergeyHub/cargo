<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;
use GuzzleHttp\Client as Client;
//use Illuminate\Support\Facades\Collection;
use Illuminate\Http\Client\Response;

class Cargo extends Controller
{

    public function index()
    {

        echo '<pre>'.'Cargo index'.'</pre>';
        //$response = Http::get('https://api.cargo.tech/v1/cargos');
        $response = Http::acceptJson()->get('https://api.cargo.tech/v1/cargos');
        //$result = json_decode($string, TRUE);

        //return Http::dd()->get('https://api.cargo.tech/v1/cargos');
        //$response->body();
        //var_dump($response);
        $result = $response->getStatusCode(); // 200
        echo $result;
        //echo $response->getHeader('content-type');
        //$result = $response->getBody(); // { "type": "User", ....
        //dd($result);

        //$posts = Http::get('https://api.cargo.tech/v1/cargos')->json();
        //$collection = collect($posts);
        //$uniqueUserIds=$collection->unique('id');
        //$countUnique=$collection->countBy('uuid');
        //dump($countUnique);
        //$total_count=$collection->countBy('id');
        //$chunk=$collection->take('10');
        //$last=$collection->last();
        //dd($posts);
        //dd($collection);
        //dd($uniqueUserIds);
        //dd($uniqueUserIds);
        //dd($count);
        //dd($total_count);
        //echo 'return N items from json data = '.'<br>';
        //dd($chunk);
        //dd($last);
        /*
        return view('index',[
            'uniqueUserIds'=>$uniqueUserIds,
            'countUnique'=>$countUnique
        ]);*/
    }
}
