@extends('layouts.app')


@section('content')
<div class="container">
    <h1 class="h1 mb-3">Register Customer</h1>

    <form method="POST" action="{{ route('customers.store') }}">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="first_name" class="form-label">First Name <span class="required">*</span></label>
                    <input type="text" class="form-control-inline" id="first_name" name="first_name" required>
                </div>

                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name <span class="required">*</span></label>
                    <input type="text" class="form-control-inline" id="last_name" name="last_name" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number <span class="required">*</span></label>
                    <input type="tel" class="form-control-inline" id="phone" name="phone" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="address" class="form-label">Address <span class="required">*</span></label>
                    <input type="text" class="form-control-inline" id="address" name="address" required>
                </div>

                <div class="mb-3">
                    <label for="city" class="form-label">City <span class="required">*</span></label>
                    <input type="text" class="form-control-inline" id="city" name="city" required>
                </div>

                <div class="mb-3">
                    <label for="postcode" class="form-label">Postcode <span class="required">*</span></label>
                    <input type="text" class="form-control-inline" id="postcode" name="postcode" required>
                </div>

                <div class="mb-3">
                    <label for="state" class="form-label">State <span class="required">*</span></label>
                    <input type="text" class="form-control-inline" id="state" name="state" required>
                </div>

                <div class="mb-3">
                    <label for="country" class="form-label">Country <span class="required">*</span></label>
                    <input type="text" class="form-control-inline" id="country" name="country" required>
                </div>

            </div>


        </div>


        <div class="mb-3">
            <label for="email" class="form-label">Email <span class="required">*</span></label>
            <input type="email" class="form-control-inline" id="email" name="email" required>
        </div>


        <button class="btn btn-success">Register</button>
    </form>
</div>
<style>
    .required {
    color: red;
}

</style>

@endsection