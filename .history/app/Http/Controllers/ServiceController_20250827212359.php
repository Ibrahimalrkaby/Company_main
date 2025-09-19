<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use PhpParser\Node\Scalar\MagicConst\Dir;

class ServiceController extends Controller
{
    public const Dir = 'admin.services.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::paginate(config('paginate.count'));
        return view(self::Dir . 'index', get_defined_vars());
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
    public function store(StoreServiceRequest $request)
    {
        // dd($request->all());
        $data = $request->validated();
        Service::create($data);
        return to_route('admin.service.index')->with('success', __('keywords.cerate_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        // dd($service);
        return view('admin.services.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $data = $request->validated();
        $service->update($data);
        return to_route('admin.service.index')->with('success', __('keywords.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        // dd($service);
        $service->delete();
        return redirect()->route('admin.service.index')->with('success', __('keywords.deleted_successfully'));
    }
}
