<?php

namespace App\Http\Controllers;

use App\Models\sitting;
use App\Http\Requests\StoresittingRequest;
use App\Http\Requests\UpdatesittingRequest;

class SittingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = sitting::paginate(config('paginate.count'));
        return view('admin.services.index', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatesittingRequest $request, sitting $sitting)
    {
        $data = $request->validated();
        $sitting->update($data);
        return to_route('admin.service.index')->with('success', __('keywords.updated_successfully'));
    }
}
