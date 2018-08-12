<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.product');
    }

    public function show($id)
    {
        $product = Product::find($id);
        $productCategory = $product->category;
        $productImages = $product->images;

        return view('detail')
            ->with('product', $product)
            ->with('category', $productCategory)
            ->with('images', $productImages);
    }

    public function getProduct($id)
    {
        $product = Product::find($id);

        return response()->json($product, 200);
    }
}
