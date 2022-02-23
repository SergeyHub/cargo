<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;

use Illuminate\Http\Request;

class FruitsHomeController extends Controller
{
    // Form Main Page View
     public function index()
    {
        $fruits = new FruitsController;
        $fruits->getData()
        return view('fruits_home');
    }
}
