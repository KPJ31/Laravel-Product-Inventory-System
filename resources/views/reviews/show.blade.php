@extends('layouts.app')

@section('main-content')
    <div class="col-5 mx-3">
        <div class="card p-4 shadow">
            <h1 class="mb-4 text-center fw-bold">Review Details</h1>
            
            <div class="mb-3">
                <b class="fs-5">Product Name:</b>
                <lable class="fs-5">{{ $review->product->pname }}</lable>
            </div>

            <div class="mb-3">
                <b class="fs-5">Customer Name:</b>
                <lable class="fs-5">{{ $review->cname }}</lable>
            </div> 

            <div class="mb-3">
                <b class="fs-5">Comments:</b>
                <label class="fs-5">{{ $review->comment }}</label>
            </div>


            <div class="text-center">
                <a class="btn btn-secondary" href="{{ route('reviews.edit', $review->id) }}">Edit</a>
            </div>
        </div>
    </div>
@endsection