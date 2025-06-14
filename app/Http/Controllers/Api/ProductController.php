<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'quantity' => 'required|integer',
        ]);

        $available = $request->quantity > 0;

        $product = Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'quantity' => $request->quantity,
            'available' => $available,
        ]);

        return response()->json(['message' => 'تم إنشاء المنتج بنجاح', 'product' => $product], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'المنتج غير موجود'], 404);
        }

        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'المنتج غير موجود'], 404);
        }

        $request->validate([
            'title' => 'sometimes|required',
            'description' => 'sometimes|required',
            'price' => 'sometimes|required|numeric',
            'category_id' => 'sometimes|exists:categories,id',
            'quantity' => 'sometimes|integer',
        ]);

        $product->update($request->only(['title', 'description', 'price', 'category_id', 'quantity']));

        if ($request->has('quantity')) {
            $product->available = $product->quantity > 0;
            $product->save();
        }

        return response()->json(['message' => 'تم التحديث بنجاح', 'product' => $product]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'المنتج غير موجود'], 404);
        }

        $product->delete();
        return response()->json(['message' => 'تم حذف المنتج بنجاح']);
    }
}
