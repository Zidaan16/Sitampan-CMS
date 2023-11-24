<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApiNavbarRequest;
use App\Http\Requests\UpdateApiNavbarRequest;
use App\Models\ApiNavbar;

class ApiNavbarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $db = ApiNavbar::all();
        return response()->json([
            'status' => true,
            'data' => $db
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreApiNavbarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($name)
    {
        $db = ApiNavbar::where('name', $name)->first();
        return response()->json([
            'status' => true,
            'data' => $db
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ApiNavbar $apiNavbar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApiNavbarRequest $request, ApiNavbar $apiNavbar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ApiNavbar $apiNavbar)
    {
        //
    }
}
