<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(Protected ProductService $service)
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $data = $request->validated();
        Product::create($data);
        return redirect()->route('products.index')->with('success','Product Successfully Created!');
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
        $data = $this->service->getDataById($id);
        return view('admin.product.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, string $id)
    {
        $data = $request->validated();
        $response = $this->service->update($data,$id);
        return redirect()->route('products.index')->with('success', 'Product Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = $this->service->getDataById($id);

            if (!$data) {
                return response()->json([
                    'message' => 'Record not found',
                ], 404);
            }

            $data->delete();

            return response()->json([
                'message' => 1,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Internal Server Error',
                'error' => $e->getMessage(),
            ], 500);
        }
    }


    public function getData(Request $request)
    {
        $data = $this->service->makeCollection($request);
        return response()->json($data);
    }
}
