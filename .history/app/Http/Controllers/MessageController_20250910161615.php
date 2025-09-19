<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Message::paginate(config('paginate.count'));
        return view('admin.services.index', get_defined_vars());
    }


    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        return view('admin.services.show', get_defined_vars());
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('admin.service.index')->with('success', __('keywords.deleted_successfully'));
    }
}
