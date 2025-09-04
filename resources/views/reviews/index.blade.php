@extends('layouts.app')

@section('main-content')
    <div class="col-9">
        <div class="card p-4 shadow">
            <h1 class="text-center mb-3 fw-bold">Reviwes Table</h1>
            <table class="table table-bordered border-dark">
                <thead>
                    <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Product</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Comments</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($reviews as $review)
                        <tr>
                            <th scope="row">{{ $review->id }}</th>
                            <td>{{ $review->product->pname }}</td>
                            <td>{{ $review->cname }}</td>
                            <td>{{ $review->comment }}</td>
                            <td>
                                <a href="{{ route('reviews.show', $review->id) }}" class="btn btn-primary btn-sm">Show</a>
                                <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-warning  btn-sm">Edit</a>
                                <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection