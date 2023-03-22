<!doctype html>
    <html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/event.css') }}">

    <title>Sign Up</title>
</head>
<body>
    <h1>Sign Up for this event</h1>

    <h2>
        Title: {{$event -> title}}
    </h2>
    <p>
        Description: {{$event -> description}}
    </p>
    <p>
        Date: {{$event -> date}}
    </p>

    <form action="?" method="Post">
        @csrf
        <div>
            <label for="email">E-Mail:</label>
            <input type="email" name="email" id="email" placeholder="Enter your e-mail">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="lastname">Last-Name:</label>
            <input type="text" name="lastname" id="lastname" placeholder="Enter your lastname">
            @error('lastname')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="firstname">First-Name:</label>
            <input type="text" name="firstname" id="firstname" placeholder="Enter your firstname">
            @error('firstname')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="answer">Answer:</label> <br>
            <input type="text" name="answer" id="answer" placeholder="yes or no">
            @error('answer')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <input type="submit" value="Sign Up">
        <a href="/"> Cancel </a>
    </form>
</body>
</html>
