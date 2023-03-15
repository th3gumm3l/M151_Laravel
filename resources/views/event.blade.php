<!doctype html>
    <html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sing Up</title>
</head>
<body>
    <h1>Sing Up</h1>
    <form method="Post">
        @csrf
        <div>
            <label for="email">E-Mail:</label>
            <input type="email" name="email" id="email" placeholder="E-mail">
        </div>
        <div>
            <label for="lastname">Last-Name:</label>
            <input type="text" name="lastname" id="lastname" placeholder="lastname">
        </div>
        <div>
            <label for="firstname">First-Name:</label>
            <input type="text" name="firstname" id="firstname" placeholder="firstname">
        </div>
        <div>
            <label for="answer">Answer:</label> <br>
            <textarea type="text" name="answer" id="answer" placeholder="answer"></textarea>
        </div>
        <input type="submit" value="Sing Up">
    </form>
</body>
</html>
