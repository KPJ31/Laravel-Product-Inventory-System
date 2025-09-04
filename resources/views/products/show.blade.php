@extends('layouts.app')

@section('main-content')
    <div class="col-5 mx-3">
        <div class="card p-4 shadow">
            <h1 class="mb-4 text-center fw-bold">Author Details</h1>
            
            <div class="mb-3">
                <b class="fs-5">Product Name:</b>
                <lable class="fs-5">{{ $product->pname }}</lable>
            </div>  
            
            <div class="mb-3">
                <b class="fs-5">Price:</b>
                <lable class="fs-5">{{ $product->price }}</lable>
            </div> 

            <div class="mb-3">
                <b class="fs-5">Stock:</b>
                <lable class="fs-5">{{ $product->stock }}</lable>
            </div> 

            <div class="mb-3">
                <b class="fs-5">Description:</b>
                <lable class="fs-5">{{ $product->detail->desc }}</lable>
            </div> 

            <div class="mb-3">
                <b class="fs-5">Manufactuer:</b>
                <lable class="fs-5">{{ $product->detail->manu }}</lable>
            </div> 

            <div class="mb-3">
                <b class="fs-5">Warrantry:</b>
                <lable class="fs-5">{{ $product->detail->warr }}</lable>
            </div>

            <div class="mb-3">
                    <b class="fs-5">Comments:</b>
                    <lable class="fs-5">
                        @if($product->review->count() > 0)
                            <ul class="mb-0">
                                @foreach($product->review as $review)
                                    <li>{{ $review->comment }}</li>
                                @endforeach
                            </ul>
                        @else
                            <span class="text-muted">No Comments</span>
                         @endif
                    </lable>
                </div>

            <div class="text-center">
                <a class="btn btn-secondary" href="{{ route('products.edit', $product->id) }}">Edit</a>
            </div>
        </div>
    </div>
@endsection