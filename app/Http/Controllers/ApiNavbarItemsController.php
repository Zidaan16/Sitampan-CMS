<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApiNavbarItemsRequest;
use App\Http\Requests\UpdateApiNavbarItemsRequest;
use App\Models\ApiNavbarItems;

class ApiNavbarItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $db = ApiNavbarItems::all();
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
    public function store(StoreApiNavbarItemsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($name)
    {
        $db = ApiNavbarItems::where('name', $name)->first();
        return response()->json([
            'status' => true,
            'data' => $db
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ApiNavbarItems $apiNavbarItems)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApiNavbarItemsRequest $request, ApiNavbarItems $apiNavbarItems)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ApiNavbarItems $apiNavbarItems)
    {
        //
    }
}
