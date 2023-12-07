<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCategoryRequest;
use App\Models\ProductCategory;
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
        return view('admin.product_category.create');
    }

    public function store(ProductCategoryRequest $request)
    {
        $data = $request->validated();
        ProductCategory::create($data);
        return redirect()->route('category.index')->with('success','Category Successfully Created!');
    }

    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $data = $this->service->getDataById($id);
        return view('admin.product_category.edit',compact('data'));
    }

    public function update(Request $request, string $id)
    {

    }

    public function destroy(string $id)
    {
        //
    }
}
