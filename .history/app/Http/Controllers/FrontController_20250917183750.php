<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
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
        return view("front.contact");
    }

    function service()
    {
        return view("front.services");
    }

    function subscriber(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        Subscriber::create($request->all());
        return redirect()->back()->with('success', 'Subscriber created successfully');
    }
}
