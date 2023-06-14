<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class productController extends Controller
{
    public function index(): Response
    {
        $products = Product::with('category')->get();

        return response([
            'success' => true,
            'data' => $products,
        ]);
    }

    public function show($id): Response
    {
        $product = Product::with('category')->findOrFail($id);

        return response([
            'success' => true,
            'data' => $product,
        ]);
    }

    public function store(Request $request): Response
    {
        $data = $request->validate([
            'name' => 'required',
            'value_price' => 'required',
            'reference' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);
        
        $product = new Product();
        $product->name = $data['name'];
        $product->value_price = $data['value_price'];
        $product->reference = $data['reference'];
        $product->category_id = $data['category_id'];
        
        $product->save();

        return response([
            'success' => true,
            'message' => 'Produto cadastrado com sucesso.',
            'data' => $product,
        ], Response::HTTP_CREATED);
    }

    public function update(Request $request, $id): Response
    {
        $data = $request->validate([
            'name' => 'required',
            'value_price' => 'required',
            'reference' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = Product::findOrFail($id);
        $product->name = $data['name'];
        $product->value_price = $data['value_price'];
        $product->reference = $data['reference'];
        $product->category_id = $data['category_id'];

        $product->save();

        return response([
            'success' => true,
            'message' => 'Produto atualizado com sucesso.',
            'data' => $product,
        ]);
    }

    public function destroy($id): Response
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return response([
            'success' => true,
            'message' => 'Product deleted successfully.',
        ], 200);
    }
}
