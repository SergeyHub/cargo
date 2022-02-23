<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Reddit extends Controller
{
    private $posts;

    public function __construct()
    {
        $json = Http::get('https://www.reddit.com/r/MechanicalKeyboards.json')->json();
        //$this->posts = collect($json['data']);
        $this->posts = collect($json['data']['children']);
    }

    public  function show()
    {
        //return 'Hello, reddit!';
       //$json = Http::get('https://www.reddit.com/r/MechanicalKeyboards.json')->json();
        //dd($json);
        //return $this->posts;

    }

    public  function index()
    {
       //return 'Hello, reddit!';
       //$json = Http::get('https://www.reddit.com/r/MechanicalKeyboards.json')->json();
       //dd($this->posts);
       //return $this->posts;
        return view('reddit.index', [
           'posts' => $this->posts
       ]);
    }

    public  function filter()
    {
        $posts = $this->posts->filter(function($post, $key){

            //return false; // skip this post element
            //return true; // keep this post element
            //return $post['data']['post_hint'] === 'image';

            if ($post['data']['post_hint'] !== 'image') {
                return false;
            }

            return \Str::contains($post['data']['url'], 'i.redd.it');
        });

        return view('reddit.filter', [
            'posts' => $posts
        ]);
    }

    public function pluck()
    {
        $images = $this->posts->filter(function($post, $key)
        {

            //return false; // skip this post element
            //return true; // keep this post element
            //return $post['data']['post_hint'] === 'image';

            if ($post['data']['post_hint'] !== 'image') {
                return false;
            }
            return \Str::contains($post['data']['url'], 'i.redd.it');

        })->pluck('data.url')->all();

        return view('reddit.pluck', [
            'images' => $images
        ]);
    }

    public function contains()
    {
        if(!$this->posts->contains('data.post_hint', 'image')){
            return view('reddit.contains-empty');
        }

        $images = $this->posts->filter(function($post, $key)
        {

            if ($post['data']['post_hint'] !== 'image') {
                return false;
            }
            return \Str::contains($post['data']['url'], 'i.redd.it');

        })->pluck('data.url')->all();

        return view('reddit.contains', [
            'images' => $images
        ]);
    }

    public function groupby()
    {
        $posts = $this->posts->filter(function ($post, $key){
           return in_array($post['data']['post_hint'],['self', 'image']);
        })
            ->groupBy('data.post_hint')
            ->toArray();

        return view('reddit.groupby', [
            'posts' => $posts
        ]);
    }


    public function sortby()
    {
        $posts = $this->posts->filter(function ($post, $key){
            return $post['data']['post_hint'] === 'image';
            //return in_array($post['data']['post_hint'],['self', 'image']);
        })
            ->sortBy('data.title')
            ->values()
            ->all();

        return view('reddit.sortby', [
            'posts' => $posts
        ]);
    }
}
