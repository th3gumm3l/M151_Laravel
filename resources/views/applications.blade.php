<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Applications</title>
</head>
<body>
    <p>Angemeldete Personen:</p>
    <ul>
        @foreach($applications as $application)
            <li>{{ $application -> firstname }} {{ $application -> lastname }}</li>
        @endforeach
    </ul>

    <small>Anzahl der Personen die nicht kommen: {{$declinedapplications}}</small>
</body>
</html>
