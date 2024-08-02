<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WELCOME</title>
</head>
<body>
    <h1>welcome</h1>
    <br>
    <h2>waiting for front-end people...</h2>
    @auth
    <a href=http://127.0.0.1:8000/profile>view profile</a>
    @else
    <a href="http://127.0.0.1:8000/register/">register here</a>
    <br>
    <a href="http://127.0.0.1:8000/login/">login here</a>
    @endauth

    <div style="border: 3px solid black;">
        <h2>Posts</h2>
        @foreach ($posts as $post)
            <div style="background-color: bisque; pedding: 10px; margin: 10px;">
                <h3>{{$post['title']}}</h3>
                <h4>by {{$post->user->name}}</h4>
                {{$post['content']}}
            </div>
        @endforeach
    </div>
    
</body>
</html>