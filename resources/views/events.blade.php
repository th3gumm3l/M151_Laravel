<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/events.css') }}">

    <title>Events</title>
</head>
<body>
    <header>
        @guest
        <a href="/login">Login</a>
        <a href="/register">Register</a>
        @endguest
    </header>

    <form action="/logout" method="post">
        @csrf
        <button type="submit">Log Out</button>
    </form>

    <h1>Events</h1>
    @auth
    <h2>Welcome, {{ auth()->user()->username }}!</h2>
    @endauth
    <ul>
        @foreach($events as $event)
            <li> ({{  $event->applications->count() }}) {{ $event -> title }} <a href="/event/{{$event -> id}}">Beitreten</a> </li>
        @endforeach
    </ul>

    <footer>
        @if(session()->has('success'))
            <div>
                <p>{{ session('success') }}</p>
            </div>
        @endif
    </footer>
</body>
</html>
