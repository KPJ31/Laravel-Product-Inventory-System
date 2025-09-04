@extends('layouts.app')

@section('main-content')
    <div class="col-5 mx-5">
        <div class="card p-4 shadow">
            <h1 class="mb-4 text-center fw-bold">Add Product</h1>
            <form action="{{ route('products.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="pname" class="form-label">Product Name:</label>
                    <input id="pname" name="pname" type="text" value="{{ old('pname') }}" class="form-control" placeholder="Product Name" required>
                    @error('pname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input id="price" name="price" type="number" value="{{ old('price') }}" class="form-control" placeholder="Price-00,000.00" required>
                    @error('price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="stock" class="form-label">Stock:</label>
                    <input id="stock" name="stock" type="number" value="{{ old('stock') }}" class="form-control" placeholder="stock-000" required>
                    @error('stock')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="desc" class="form-label">Description:</label>
                    <textarea name="desc" id="desc" class="form-control" placeholder="Description" required>{{ old('desc') }}</textarea>
                    @error('desc')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="manu" class="form-label">Manufactuer:</label>
                    <input id="manu" name="manu" type="text" value="{{ old('manu') }}" class="form-control" placeholder="Manufactuer" required>
                    @error('manu')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="warr" class="form-label">Warrantry:</label>
                    <select class="form-select  @error('warr') is-invalid @enderror" name="warr">
                        <option value="">Open this select menu</option>
                        <option {{ old('warrantry') == '3 Months' ? 'selected' : '' }}>3 Months</option>
                        <option {{ old('warrantry') == '6 Months' ? 'selected' : '' }}>6 Months</option>
                        <option {{ old('warrantry') == '1 Year' ? 'selected' : '' }}>1 Year</option>
                        <option {{ old('warrantry') == '2 Years' ? 'selected' : '' }}>2 Years</option>
                        <option {{ old('warrantry') == '3 Years' ? 'selected' : '' }}>3 Years</option>
                        <option {{ old('warrantry') == '5 Years' ? 'selected' : '' }}>5 Years</option>
                        <option {{ old('warrantry') == '10 Years' ? 'selected' : '' }}>10 Years</option>
                    </select>
                    @error('warr')
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