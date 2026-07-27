<h1>All Contacts</h1>

@foreach ($contacts as $contact)
    <p>{{ $contact->first_name }}
        {{ $contact->last_name }}
    </p>
@endforeach

{{-- Pagination Links --}}
{{ $contacts->links() }}
{{-- Pagination Links --}}