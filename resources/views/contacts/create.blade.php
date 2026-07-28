@extends('layouts.app')

@section('content')
    <h1>Create Contact</h1>

    <form action="{{ route('contacts.store') }}" method="POST">

        @csrf

        <x-contact-form />

        <button class="btn btn-success">Save Contact</button>

    </form>
@endsection
