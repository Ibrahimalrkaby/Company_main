<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSubscriberRequest;

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

    function subscriber(StoreSubscriberRequest $request)
    {
        $data = $request->validated();
        Subscriber::create($data->all());
        return redirect()->back()->with('success', 'Subscriber created successfully');
    }
}
