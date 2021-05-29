<!-- Extends ni function dia untuk extend dari main layout (ie: layouts.app) supaya setiap sections boleh kongsi 1 layout. -->
<!-- Nak buat layout baru pun boleh. Ie: layout special untuk login, untuk dashboard, etc... -->
@extends('layouts.app')

<!-- Section name mestilah sama seperti di main layout. -->
@section('content')

<div class="container mt-4">
    <h1>Product List</h1>

    <!-- Button untuk redirect ke page create.blade.php menggunakan route.  -->
    <a href="{{ route('products.create') }}" class="btn btn-primary my-3">Add Product</a>

    <!-- Table untuk display listings of resources (in this case, products). Boleh guna any way untuk display listings, not limited kepada table. -->
    <table class="table table-striped">
        <thead>
          <tr>
            <th>Product<th>
            <th colspan="3">Action</th>
          </tr>
        </thead>
        <tbody>

            <!-- Disebabkan $products ialah dalam bentuk Collection (sejenis array), mesti looping setiap record. -->
            <!-- Boleh guna any way untuk looping, mostly common untuk guna foreach(). -->
            @foreach ($products as $product)
            <tr>
                <!-- Setiap records terus panggil nama columns yg nak output. -->
                <td>{{ $product->productName }}</td>
                <td>{{ $product->productPrice }}</td>

                <!-- For button show & edit boleh direct guna tag <a href=""> & route() -->
                <td>
                    <a href="{{route('products.show', $product)}}" class="btn btn-info">Show</a>
                </td>
                <td>
                    <a href="{{route('products.edit', $product)}}" class="btn btn-success">Edit</a>
                </td>

                <!-- For button delete ni special skit, sebab destroy() method dia is POST. Takleh guna href biasa sebab GET -->
                <!-- So, create lah satu form seperti di bawah. -->
                <td>
                    <form method="post" action="{{ route('products.destroy', $product) }}" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
</div>


@endsection
