<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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

        // Get product through Cart instead of Product table

        // If it not exist then create and return the product back

        // Check if user authenticated or not
        return response()->json(['message' => 'Cheking auth ...' , 'AUth' => Auth::check()], 200);
        if (Auth::check()) {
            // Find the product through cart related to User
            return response()->json(['message' => 'Cheking auth ...' , 'AUth' => Auth::check()], 200);
            $cart = User::find(Auth::user()->id)->cart;

            // find product exist or not
            $product = $cart->products->find($id);

            // if product not found then update the pivot
            if (!$product) {
                $temp = Product::find($id);
                $product = $cart->products()->attach($id, ['price' => $temp->unit_price, 'qty' => 1]);
            }
            return response()->json($product, 200);
        }

        $product = Product::find($id);
        return response()->json($product, 200);


        // Response the product as json back to client
    }
}
