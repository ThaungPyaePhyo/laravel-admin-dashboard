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
    
    public function index()
    {
        return view('admin.product.index');
    }


    public function create()
    {
        return view('admin.product.create');
    }

    public function store(ProductRequest $request)
    {
        $data = $request->validated();
        Product::create($data);
        return redirect()->route('products.index')->with('success','Product Successfully Created!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $data = $this->service->getDataById($id);
        return view('admin.product.edit',compact('data'));
    }

    public function update(ProductRequest $request, string $id)
    {
        $data = $request->validated();
        $response = $this->service->update($data,$id);
        return redirect()->route('products.index')->with('success', 'Product Successfully Updated!');
    }

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
