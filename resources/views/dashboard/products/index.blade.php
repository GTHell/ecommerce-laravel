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

        <a href="/dashboard/products/create" class="btn btn-outline-info">create new product</a>
        @if(Session::has('message'))
        <div class="alert-info">
            <p>
                {{Session::get('message')}}
            </p>
        </div>
        @endif

        <h2>Products</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>SKU</th>
                    <th>Unit Price</th>
                    <th>Description</th>
                    <th>supplier</th>
                    <th>category</th>
                    <th>sold</th>
                    <th>action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->sku}}</td>
                        <td>{{$product->unit_price}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->supplier->name}}</td>
                        <td>{{$product->category->name}}</td>
                        <td>{{$product->sold}}</td>
                        <td>
                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#r{{$product->id}}">
                                Delete
                            </button>
                            <a href="/dashboard/products/{{$product->id}}/edit" class="btn btn-primary">Edit</a>
                            <!-- Modal -->
                            <div class="modal fade" id="r{{$product->id}}" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            {{$product->id}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                Cancel
                                            </button>
                                            <a type="button" class="btn btn-danger"
                                               onclick="document.getElementById('form_{{$product->id}}').submit();">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form action="/dashboard/products/{{$product->id}}" method="POST"
                                  id="form_{{$product->id}}">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
