@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Customer List</h1>
        <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Postcode</th>
                    <th>State</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->first_name }}</td>
                        <td>{{ $customer->last_name }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->city }}</td>
                        <td>{{ $customer->postcode }}</td>
                        <td>{{ $customer->state }}</td>
                        <td>{{ $customer->country }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection