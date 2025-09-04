<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<div class="col-3">
    <div class="card p-4 shadow mb-2">
        <h3 class ="mb-4 text-center fw-bold">Add</h3>
        <a class="btn btn-primary" href="{{ route('products.create') }}">Add Product</a>
        <br>
        <a class="btn btn-primary" href="{{ route('reviews.create') }}">Add Review</a>

    </div>

    <div class="card p-4 shadow mb-2">
        <h3 class ="mb-4 text-center fw-bold">Tables</h3>
        <a class="btn btn-primary" href="{{ route('products.index') }}">Products Table</a>
        <br>
        <a class="btn btn-primary" href="{{ route('details.index') }}">Products Details Table</a>
        <br>
        <a class="btn btn-primary" href="{{ route('reviews.index') }}">Products Review Table</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>