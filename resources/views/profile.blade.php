<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
    <h1>This is your profile</h1>
    <br>
    <div style="border: 3px solid black;"> 
        <h2>creat a post here</h2>
        <form action="/PostValidation" method="POST">
        @csrf
        <input type="text" placeholder="title" name="title">
        <br>
        <textarea name="content" placeholder="content..." cols="30" rows="10"></textarea>
        <button type="submit">POST</button>
        </form>
    </div>
    <div style="border: 3px solid black ;">
        <h2>your posts</h2>
        @foreach ($posts as $post)
            <div style="background-color: blanchedalmond; pedding:10px; margin:10px">
                <h3>{{$post['title']}}</h3>
                {{$post['content']}}
                <p><a href="/edit-post/{{$post->id}}">Edit</a></p>
                <form action="/delete-post/{{$post->id}}"method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </div>
        @endforeach
    </div>
    <form action="/logout" method="GET">
        @csrf
        <button>logout</button>
    </form>
</body>
</html>