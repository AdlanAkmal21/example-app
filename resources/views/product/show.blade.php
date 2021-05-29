<!-- Extends ni function dia untuk extend dari main layout (ie: layouts.app) supaya setiap sections boleh kongsi 1 layout. -->
<!-- Nak buat layout baru pun boleh. Ie: layout special untuk login, untuk dashboard, etc... -->
@extends('layouts.app')

<!-- Section name mestilah sama seperti di main layout. -->
@section('content')

<div class="container mt-4">
    <h1>Show Product</h1>

    <!-- Button untuk redirect ke page index.blade.php menggunakan route.  -->
    <a href="{{ route('products.index') }}" class="btn btn-secondary my-3">Product List</a>

    <!-- Untuk Show & Edit make sure ada value untuk display kepada user. -->
    <div class="form-group">
    <label for="productName">Product Name:</label>
    <input type="text" class="form-control" name="productName" id="productName" value="{{ $product->productName }}">
    </div>
    <div class="form-group">
    <label for="productPrice">Product Price</label>
    <input type="text" class="form-control" name="productPrice" id="productPrice" value="{{ $product->productPrice }}">
</div>

</div>

@endsection
