<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    function index()
    {
        return view("front.index");
    }

    function about()
    {
        return view("front.about");
    }

    function contact()
    {
        return view("front.services");
    }
}
