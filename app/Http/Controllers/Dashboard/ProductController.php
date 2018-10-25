<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //
    public function index () {
        $products = Product::all();
        return view('dashboard.product')->with('products', $products);
    }

    public function getProduct ($id) {
        $product = Product::find($id);

        return 123;
        return response()->json($product, 200);
    }
}
