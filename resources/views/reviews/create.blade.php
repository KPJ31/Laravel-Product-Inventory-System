@extends('layouts.app')

@section('main-content')
    <div class="col-5 mx-5">
        <div class="card p-4 shadow">
            <h1 class="mb-4 text-center fw-bold">Add Review</h1>
            <form action="{{ route('reviews.store') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="pro_id" class="form-label">Product:</label>
                    <select id="pro_id" name="pro_id" class="form-control" required>
                        <option value="">Select Product</option>
                        @foreach($products as $product)
                            <option value="{{ $product->id }}" {{ old('pro_id') == $product->id ? 'selected' : '' }}>
                                {{ $product->pname }}
                            </option>
                        @endforeach
                    </select>
                    @error('pro_id') 
                        <span class="text-danger">{{ $message }}</span> 
                    @enderror
                </div>

                <div class="mb-3">
                    <lable for="cname" class="form-label">Your Name: </lable>
                    <input id="cname" name="cname" type="text" value="{{ old('cname') }}" class="form-control" placeholder="Your Name" required>
                    @error('cname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="comment" class="form-label">Comment:</label>
                    <textarea name="comment" id="comment" class="form-control" placeholder="Comment" required>{{ old('comment') }}</textarea>
                    @error('comment')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="reset" class="btn btn-secondary">Clear</button>
                </div>
            </form>
        </div>
    </div>

@endsection