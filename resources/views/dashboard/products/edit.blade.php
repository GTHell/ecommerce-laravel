@extends('dashboard.layouts.app')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <button class="btn btn-sm btn-outline-secondary">Share</button>
                    <button class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar"></span>
                    This week
                </button>
            </div>
        </div>

        <h2>Create New Product</h2>
        <form action="{{route('dashboard.products.update',['id' => $product->id])}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" value="{{$product->name}}" class="form-control" id="name" name="name" placeholder="Product Name">
            </div>
            <div class="form-group">
                <label for="sku">SKU</label>
                <input type="text" value="{{$product->sku}}" class="form-control" id="sku" name="sku" placeholder="SKU">
            </div>
            <div class="form-group">
                <label for="unit_price">Unit Price</label>
                <input type="number" value="{{$product->unit_price}}" class="form-control" id="unit_price" name="unit_price" placeholder="Unit Price">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" value="{{$product->description}}" class="form-control" id="description" name="description"
                       placeholder="Product Description">
            </div>
            <div class="form-group">
                <label for="supplier">Supplier</label>
                <select class="form-control" id="supplier" name="supplier_id">
                    @foreach($sups as $sup)
                        <option value="{{$sup->id}} {{$sup->id === $product->sup_id ? 'selected' : ''}}">{{$sup->company_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" id="category" name="category_id">
                    @foreach($cats as $cat)
                        <option value="{{$cat->id}} {{$cat->id === $product->cat_id ? 'selected' : ''}}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>
@endsection
