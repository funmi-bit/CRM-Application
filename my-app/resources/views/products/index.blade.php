@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Product List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->product_name }}</td>
                        <td>
                            @if ($product->image)
                                <img src="{{ asset('public/images/' . $product->image) }}" alt="{{ $product->product_name }}" style="max-width: 100px;">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td><a class="btn btn-primary" href="{{ route('products.edit', ['id' => $product->id]) }}">Edit</a></td>
                        <td>
                            <form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
