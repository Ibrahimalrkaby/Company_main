<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Http\Requests\StoreSubscriberRequest;
use App\Http\Requests\UpdateSubscriberRequest;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Subscriber::paginate(config('paginate.count'));
        return view('admin.services.index', get_defined_vars());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscriber $subscriber)
    {
        $subscriber->delete();
        return redirect()->route('admin.service.index')->with('success', __('keywords.deleted_successfully'));
    }
}
