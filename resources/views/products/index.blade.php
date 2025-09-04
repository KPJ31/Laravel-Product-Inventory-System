@extends('layouts.app')

@section('main-content')
    <div class="col-9">
        <div class="card p-4 shadow">
            <h1 class="text-center mb-3 fw-bold">Products Table</h1>
            <table class="table table-bordered border-dark">
                <thead>
                    <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Products</th>
                        <th scope="col">Price</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Warrantry</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $product)
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->pname }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->detail->warr }}</td>
                            <td>
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary btn-sm">Show</a>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning  btn-sm">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block">
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