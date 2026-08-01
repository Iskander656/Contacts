@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1>Contacts</h1>

        <form action="{{ route('contacts.index') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search contacts..."
                    value="{{ request('search') }}">

                <button class="btn btn-primary">
                    <i class="bi bi-search"></i>
                    Search
                </button>
            </div>
        </form>



        <a href="{{ route('contacts.create') }}" class="btn btn-primary">

            <i class="bi bi-plus-circle"></i>

            New Contact
        </a>

    </div>

    <div class="row">

        @foreach ($contacts as $contact)
            <x-contact-card :contact="$contact" />
        @endforeach

    </div>

    {{ $contacts->links() }}
@endsection
