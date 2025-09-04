@extends('layouts.app')

@section('main-content')
    <div class="col-5 mx-5">
        <div class="card p-4 shadow">
            <h1 class="mb-4 text-center fw-bold">Edit Review</h1>
            <form action="{{ route('reviews.update', $review->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <div class="mb-3">
                        <label for="pname" class="form-label">Product:</label>
                        <lable class="form-label">{{ $review->product->pname }}</lable>
                        <input type="hidden" name="pro_id" value="{{ $review->pro_id }}">
                    </div>
                </div>

                <div class="mb-3">
                    <lable for="cname" class="form-label">Your Name: </lable>
                    <input id="cname" name="cname" type="text" value="{{ $review->cname }}" class="form-control" placeholder="Your Name" required>
                    @error('cname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="comment" class="form-label">Comment:</label>
                    <textarea name="comment" id="comment" class="form-control" placeholder="Comment" required>{{ $review->comment }}</textarea>
                    @error('comment')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>

@endsection