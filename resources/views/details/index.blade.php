@extends('layouts.app')

@section('main-content')
    <div class="col-9">
        <div class="card p-4 shadow">
            <h1 class="text-center mb-3 fw-bold">Products Details Table</h1>
            <table class="table table-bordered border-dark">
                <thead>
                    <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Products</th>
                        <th scope="col">Description</th>
                        <th scope="col">Manufactuer</th>
                        <th scope="col">Warrantry</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($details as $detail)
                        <tr>
                            <th scope="row">{{ $detail->id }}</th>
                            <td>{{ $detail->product->pname }}</td>
                            <td>{{ $detail->desc }}</td>
                            <td>{{ $detail->manu }}</td>
                            <td>{{ $detail->warr }}</td>
                            <td>
                                <a href="{{ route('products.show', $detail->product->id) }}" class="btn btn-primary btn-sm">Show</a>
                                <a href="{{ route('products.edit', $detail->product->id) }}" class="btn btn-warning  btn-sm">Edit</a>
                            </td>
                        </tr>
                        @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection