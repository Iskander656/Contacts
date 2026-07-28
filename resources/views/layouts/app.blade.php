<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacts App</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css.map') }}">
    <link rel="stylesheet" href="{{ asset('css/icons/bootstrap-icons.min.css') }}">

</head>

<body>

    <nav class="navbar navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a href="navbar-brand fw-bold" href="{{ route('contacts.index') }}">
                Contacts App
            </a>
        </div>
    </nav>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        
    @endif


    <div class="container py-5">
        @yield('content')
    </div>

</body>

</html>
