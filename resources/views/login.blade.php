<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/login.css">
    <script src="js/login.js"></script>
    <title>LOGIN</title>
</head>
<body>
    {{-- @include('error') --}}
    <h1>login here</h1>
    <form action="{{route('user.login')}}" method="POST">
        @csrf
        <input type="text" placeholder="name" name="name">
        <input type="password" placeholder="password" name="password">
        <button type="submit">LOGIN</button>
    </form>
</body>
</html>