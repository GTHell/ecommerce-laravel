<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //
    public function index () {
        return view('dashboard.product');
    }

    public function getProduct ($id) {
        $product = Product::find($id);

        return 123;
        return response()->json($product, 200);
    }
}
