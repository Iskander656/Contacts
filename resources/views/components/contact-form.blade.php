{{-- This means This component can receive a concact. If no contact is provided, use null --}}
    @props([
        'contact' => null,
    ])

    <div class="mb-3">

        <label class="form-label">
            First Name
        </label>

        <input type="text" name="first_name" class="form-control" value="{{ old('first_name', $contact?->first_name) }}">

    </div>


    <div class="mb-3">

        <label class="form-label">
            Last Name
        </label>

        <input type="text" name="last_name" class="form-control" value="{{ old('last_name', $contact?->last_name) }}">

    </div>


    <div class="mb-3">

        <label class="form-label">
            Email
        </label>

        <input type="email" name="email" class="form-control" value="{{ old('email', $contact?->email) }}">

    </div>


    <div class="mb-3">

        <label class="form-label">
            Phone
        </label>

        <input type="text" name="phone" class="form-control" value="{{ old('phone', $contact?->phone) }}">

    </div>

