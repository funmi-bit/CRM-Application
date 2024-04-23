@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Contact Log List</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Customer Name</th>
                <th>Customer Phone</th>
                <th>Customer Email</th>
                <th>Product</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contactLogs as $log)
            <tr>

                <td>{{ $log->customer_first_name }} {{ $log->customer_last_name }}</td>
                <td>{{ $log->customer_phone }}</td>
                <td>{{ $log->customer_email }}</td>
                <td>{{ $log->product_name }}</td>
                <td>{{ $log->subject }}</td>
                <td>{{ $log->message }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection