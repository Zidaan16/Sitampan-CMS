<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApiPageInfoRequest;
use App\Http\Requests\UpdateApiPageInfoRequest;
use App\Models\ApiPageInfo;

class ApiPageInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $db = ApiPageInfo::all();
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
    public function store(StoreApiPageInfoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ApiPageInfo $apiPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ApiPageInfo $apiPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApiPageInfoRequest $request, ApiPageInfo $apiPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ApiPageInfo $apiPage)
    {
        //
    }
}
