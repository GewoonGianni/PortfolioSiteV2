<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function showIndex()
    {
        return view('index');
    }

    public function show($page)
    {
        return view($page);
    }
}
