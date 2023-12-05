<?php

namespace App\Http\Controllers;

use App\Services\ProductCategoryService;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function __construct(
        Protected ProductCategoryService $service
    )
    {

    }
    public function index()
    {
        return view('admin.product_category.index');
    }

    public function getData()
    {
        $data = $this->service->makeCollection();
        return response()->json($data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
