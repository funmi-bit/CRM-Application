@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Contact Log</h1>
        <form method="POST" action="{{ route('contact_logs.update', ['id' => $contactLog->id]) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="customer_first_name">Customer First Name:</label>
                <input type="text" class="form-control" id="customer_first_name" name="customer_first_name" value="{{ $contactLog->customer_first_name }}" required>
            </div>
            <div class="form-group">
                <label for="customer_last_name">Customer Last Name:</label>
                <input type="text" class="form-control" id="customer_last_name" name="customer_last_name" value="{{ $contactLog->customer_last_name }}" required>
            </div>
            <div class="form-group">
                <label for="customer_phone">Customer Phone:</label>
                <input type="text" class="form-control" id="customer_phone" name="customer_phone" value="{{ $contactLog->customer_phone }}" required>
            </div>
            <div class="form-group">
                <label for="customer_email">Customer Email:</label>
                <input type="email" class="form-control" id="customer_email" name="customer_email" value="{{ $contactLog->customer_email }}" required>
            </div>
            <div class="form-group">
                <label for="product_id">Product:</label>
                <select class="form-control" id="product_id" name="product_id" required>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}" @if($product->id == $contactLog->product_id) selected @endif>{{ $product->product_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" class="form-control" id="subject" name="subject" value="{{ $contactLog->subject }}" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message" name="message" rows="3" required>{{ $contactLog->message }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
