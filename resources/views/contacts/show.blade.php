@extends('layouts.app')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <h1>
                {{ $contact->first_name }}
                {{ $contact->last_name }}
            </h1>

            <hr>
            <p>
                <strong>Email:</strong>

                {{ $contact->email }}
            </p>

            <p>
                <strong>Phone:</strong>
                {{ $contact->phone }}
            </p>

            <p>
                <strong>Company:</strong>
                {{ $contact->company }}
            </p>

            <p>
                <strong>Country:</strong>
                {{ $contact->country }}
            </p>

            <p>
                <strong>Notes:</strong>
                {{ $contact->notes }}
            </p>

            <a href="{{ route('contacts.index') }}" class="btn btn-secondary">
                Back
            </a>
        </div>
    </div>
@endsection
