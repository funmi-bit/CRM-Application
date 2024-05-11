@extends('layouts.app')

@section('content')
    <div class="container mt-3">
    <a href="{{ route('dashboard') }}" class="btn btn-secondary mb-3">Back to Dashboard</a>

        <h2>Edit Customer Details</h2>
        <form action="{{ route('customers.update', ['id' => $customer->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
            <div class="mb-3">
            <label for="first_name">First name:</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $customer->first_name }}" required>
        </div>
        <div class="mb-3">
            <label for="last_name">Last name:</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $customer->last_name }}" required>
        </div>

            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone-{{ $customer->id }}" name="phone" value="{{ $customer->phone }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email-{{ $customer->id }}" name="email" value="{{ $customer->email }}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address-{{ $customer->id }}" name="address" value="{{ $customer->address }}">
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city-{{ $customer->id }}" name="city" value="{{ $customer->city }}">
            </div>
            <div class="mb-3">
                <label for="postcode" class="form-label">Postcode</label>
                <input type="text" class="form-control" id="postcode-{{ $customer->id }}" name="postcode" value="{{ $customer->postcode }}">
            </div>
            <div class="mb-3">
                <label for="state" class="form-label">State</label>
                <input type="text" class="form-control" id="state-{{ $customer->id }}" name="state" value="{{ $customer->state }}">
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <input type="text" class="form-control" id="country-{{ $customer->id }}" name="country" value="{{ $customer->country }}">
            </div>

            <button class="btn btn-success mt-3">Update Customer</button>
        </form>
    </div>
