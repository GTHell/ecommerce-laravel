<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        return view('dashboard.products.index')->with('products', $products);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'sku' => 'required',
            'unit_price' => 'required|numeric',
            'description' => 'required',
            'category_id' => 'required',
            'supplier_id' => 'required'
        ]);
        ProductImage::create([
            'product_id' => rand(1,600),
            'name'  => $request->name
        ]);
        Product::create($request->all());
//        Product::create([
//            'name' => $request->name,
//            'sku' => $request->sku,
//            'description' => $request->description,
//            'unit_price' => $request->unit_price,
//            'category_id' => $request->category_id,
//            'supplier_id' => $request->supplier_id
//        ]);
        Session::flash('message', 'success created product');
        return redirect()->route('dashboard.products.index');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $cats = Category::where('parent_id', '!=', 'null')->get();
        $sups = Supplier::all();
        return view('dashboard.products.edit')
            ->with(['product' => $product, 'cats' => $cats, 'sups' => $sups]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        Session::flash('message', 'Update successfully');
        return redirect()->route('dashboard.products.index');
    }

    public function create()
    {
        $cats = Category::where('parent_id', '!=', 'null')->get();
        $sups = Supplier::all();
        return view('dashboard.products.create')
            ->with(['cats' => $cats, 'sups' => $sups]);
    }

    public function destroy($id)
    {
        Product::destroy($id);
        Session::flash('message', 'Deleted successfully');
        return redirect()->back();
    }

    public function getProduct($id)
    {
        $product = Product::find($id);

        return 123;
        return response()->json($product, 200);
    }
}
