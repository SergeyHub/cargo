<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Reddit extends Controller
{
    private $posts;

    public function __construct()
    {
        $json = Http::get('https://www.reddit.com/r/MechanicalKeyboards.json')
                ->json();
        $this->posts = collect($json['data']['children']);
    }

    public  function index()
    {
       //return 'Hello, reddit!';
       //return $this->posts;
        return view('reddit.index', [
           'posts' => $this->posts
       ]);
    }
}
