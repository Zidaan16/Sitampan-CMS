<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApiPageRequest;
use App\Http\Requests\UpdateApiPageRequest;
use App\Models\ApiPage;

class ApiPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreApiPageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($url)
    {
        $db = ApiPage::where('url', $url)->first();
        return response()->json([
            'status' => true,
            'data' => $db
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ApiPage $apiPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApiPageRequest $request, ApiPage $apiPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ApiPage $apiPage)
    {
        //
    }
}
