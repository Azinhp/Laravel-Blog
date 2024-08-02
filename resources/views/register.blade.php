<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTER</title>
</head>
<body>
    <h1>register here</h1>
    <form action="/validate" method="POST">
        @csrf
        <input type="text" placeholder="name" name="name">
        <br>
        <input type="text" placeholder="email" name="email">
        <br>
        <input type="password" placeholder="password" name="password">
        <button type="submit">REGISTER</button>
    </form>
</body>
</html>