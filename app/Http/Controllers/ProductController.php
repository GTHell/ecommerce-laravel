<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    //
    public function index()
    {
        $categories = Category::where('parent_id', '!=', null)->get();
        return view('product')
            ->with('categories', $categories);
    }

    public function getProduct($id)
    {
        if (request()->ajax())
            return $this->ajaxGetProduct($id);
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

    public function ajaxGetProduct($id)
    {

        // Get product through Cart instead of Product table

        // If it not exist then create and return the product back

        // Check if user authenticated or not
        if (Auth::check()) {
            // Find the product through cart related to User
//            return response()->json(['auth' => Auth::check(), 'user_id' => Auth::user()->id], 200);
            $cart = User::find(Auth::user()->id)->cart;

            // find product exist or not
            $product = $cart->products->find($id);

            // if product not found then update the pivot
            if (!$product) {
//                $product = Product::find($id);
                $product = Product::with('images')->where('id',$id)->get();
                $cart->products()->attach($id, ['price' => $product->unit_price, 'qty' => 1]);
            }
            return response()->json($product, 200);
        }

//        $product = Product::find($id);
        $product = Product::with('images')->where('id',$id)->first();
        return response()->json($product, 200);


        // Response the product as json back to client
    }
}
