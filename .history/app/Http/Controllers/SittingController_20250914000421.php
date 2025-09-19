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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoresittingRequest $request)
    {
        $data = $request->validated();
        sitting::create($data);
        return to_route('admin.service.index')->with('success', __('keywords.cerate_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(sitting $sitting)
    {
        return view('admin.services.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sitting $sitting)
    {
        return view('admin.services.edit', get_defined_vars());
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sitting $sitting)
    {
        $sitting->delete();
        return redirect()->route('admin.service.index')->with('success', __('keywords.deleted_successfully'));
    }
}
