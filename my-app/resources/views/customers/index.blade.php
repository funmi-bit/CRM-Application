@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Customer List</h1>
        <div class="mb-3">
            <input type="text" id="searchInput" class="form-control" placeholder="Search...">
        </div>
        <table id="customerTable" class="table table-sm">
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
                    <th>Edit</th>
                    <th>Delete</th>
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
                        
                        <td>
                            <a href="{{ route('customers.edit', ['id' => $customer->id]) }}">
                                <button class="btn btn-primary">Edit</button>
                            </a>
                        </td>
                        
                        <td>
                            <form action="{{ route('customers.destroy', ['id' => $customer->id]) }}" method="POST">
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#customerTable').DataTable();
            
            $('#searchInput').on('keyup', function() {
                table.search(this.value).draw();
            });
        });
    </script>
@endsection
