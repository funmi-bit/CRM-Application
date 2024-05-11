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
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contactLogs as $log)
            <tr>

                <td>{{ $log->customer_first_name }} {{ $log->customer_last_name }}</td>
                <td>{{ $log->customer_phone }}</td>
                <td>{{ $log->customer_email }}</td>
                <td>{{ $log->product_id }}</td>
                <td>{{ $log->subject }}</td>
                <td>{{ $log->message }}</td>
                <td><a href="{{ route('contact_logs.edit', ['id' => $log->id]) }}">
                        <button class="btn btn-primary">Edit</button>
                        </a></td>
                        
                        <td>
                        <form action="{{ route('contact_logs.destroy', ['id' => $log->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Customer?')">Delete</button>
                            </form>
                        </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection