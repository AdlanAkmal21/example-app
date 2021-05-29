<!-- Extends ni function dia untuk extend dari main layout (ie: layouts.app) supaya setiap sections boleh kongsi 1 layout. -->
<!-- Nak buat layout baru pun boleh. Ie: layout special untuk login, untuk dashboard, etc... -->
@extends('layouts.app')

<!-- Section name mestilah sama seperti di main layout. -->
@section('content')

<div class="container mt-4">
    <h1>Edit Product</h1>

    <!-- Button untuk redirect ke page index.blade.php menggunakan route.  -->
    <a href="{{ route('products.index') }}" class="btn btn-secondary my-3">Product List</a>

    <!-- Untuk edit data/record mesti guna form and make sure method POST. -->
    <!-- Also, passkan variable ($product) bersama route() so that dia tahu record mana dia nak update. -->
    <form method="POST" action="{{ route('products.update', $product) }}">

        <!-- Jangan lupa csrf setiap kali guna form. -->
        @csrf

        <!-- Additional method untuk edit/update record. Even though dia mmg method POST, kita kena specify jenis apa. -->
        <!-- Edit boleh guna 2 method (PUT/PATCH) -->
        @method('PATCH')

        <!-- Untuk Show & Edit make sure ada value untuk display kepada user. -->
        <div class="form-group">
        <label for="productName">Product Name:</label>
        <input type="text" class="form-control" name="productName" id="productName" value="{{ $product->productName }}">
        </div>
        <div class="form-group">
        <label for="productPrice">Product Price</label>
        <input type="text" class="form-control" name="productPrice" id="productPrice" value="{{ $product->productPrice }}">

        <button type="submit" class="btn btn-success my-3">Update Product</button>
    </form>

</div>

</div>

@endsection
