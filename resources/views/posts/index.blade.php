<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('post.store')}}" method="POST">
        @csrf
        <div>
            <input type="text" name="title" placeholder="Post Title">
        </div>
        <br>
        <br>
        <div>
            <textarea name="content" placeholder="Post Content"></textarea>
        </div>
        <button type="submit">Create Post</button>
    </form>
</body>
</html>