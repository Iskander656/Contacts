@extends('layouts.app')

@section('content')
    <h1>Edit Contact</h1>

    <form action="{{ route('contacts.update', $contact) }}" method="POST">
        @csrf
        @method('PUT')

        <x-contact-form :contact="$contact" />

        <button class="btn btn-warning">
            Update Contact
        </button>
    </form>
@endsection
