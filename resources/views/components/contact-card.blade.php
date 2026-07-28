@props(['contact'])
<div class="col-md-6 col-lg-4 mb-4">

    <div class="card shadow-sm h-100">

        <div class="card-body">

            <h5 class="card-title">

                {{ $contact->first_name }}
                {{ $contact->last_name }}

            </h5>

            <p>

                <i class="bi bi-envelope"></i>

                {{ $contact->email }}

            </p>

            <p>

                <i class="bi bi-telephone"></i>

                {{ $contact->phone }}

            </p>

            <p>

                <i class="bi bi-building"></i>

                {{ $contact->company }}

            </p>

            <a href="{{ route('contacts.edit', $contact) }}" class="btn btn-warning">
                <i class="bi bi-pencil"></i>
                Edit
            </a>

        </div>

    </div>

</div>
