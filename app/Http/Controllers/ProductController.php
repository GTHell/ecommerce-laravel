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
        $reviews = $product->reviews()->limit(3)->get();
        $reviewCount = $product->reviews->count();

        return view('detail')
            ->with('product', $product)
            ->with('category', $productCategory)
            ->with('images', $productImages)
            ->with('reviews', $reviews)
            ->with('reviewCount', $reviewCount);
    }

    public function getProduct($id)
    {
        $product = Product::find($id);

        return response()->json($product, 200);
    }
}
