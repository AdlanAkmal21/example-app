<!-- Extends ni function dia untuk extend dari main layout (ie: layouts.app) supaya setiap sections boleh kongsi 1 layout. -->
<!-- Nak buat layout baru pun boleh. Ie: layout special untuk login, untuk dashboard, etc... -->
@extends('layouts.app')

<!-- Section name mestilah sama seperti di main layout. -->
@section('content')

<div class="container mt-4">
    <h1>Create Product</h1>

    <!-- Button untuk redirect ke page index.blade.php menggunakan route.  -->
    <a href="{{ route('products.index') }}" class="btn btn-secondary my-3">Product List</a>

    <!-- Create records mesti menggunakan form -->
    <form method="POST" action="{{ route('products.store') }}">

        <!-- Jangan lupa csrf ni, sangat lah penting whenever menggunakan form. -->
        @csrf

        <!-- Make sure setiap input ada name so that Controller tahu nak ambik value input mana. -->
        <!-- Ideally guna nama yg sama dgn nama column. -->
        <div class="form-group">
            <label for="productName">Product Name:</label>
            <input type="text" class="form-control" name="productName" id="productName">
        </div>
        <div class="form-group">
            <label for="productPrice">Product Price</label>
            <input type="text" class="form-control" name="productPrice" id="productPrice">
        </div>
        <button type="submit" class="btn btn-primary my-3">Add Product</button>
    </form>
</div>



@endsection
