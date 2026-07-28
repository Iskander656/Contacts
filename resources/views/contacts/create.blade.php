@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow">

                <div class="card-header">
                    <h3>Create Contact</h3>
                </div>

                <div class="card-body">
                    {{-- When the user clicks Save Contact, send the form data to the contacts.store route using the POST HTTP method --}}
                    <form action="{{ route('contacts.store') }}" method="POST">
                        {{-- This line is mandatory for almost every POST form in Laravel
                        It generates a hidden input --}}
                        
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">First Name</label>

                            <input type="text" name="first_name" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Last Name</label>

                            <input type="text" name="last_name" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>

                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone</label>

                            <input type="text" name="phone" class="form-control">
                        </div>

                        <button class="btn btn-success">
                            Save Contact
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>
@endsection
