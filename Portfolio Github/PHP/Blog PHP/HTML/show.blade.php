<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Blog van Tim Slager</title>
    <meta name="Beschrijving" content="The HTML5 Herald">
    <meta name="Tim Slager" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>
<script src="js/scripts.js"></script>
<div>
    <h1>Blog Posts:</h1>
    <h1>{{$blog->title}}</h1>
    <p>{{$blog->post}}</p>
    <h3>{{$blog->created_at}} by: {{$blog->user->name}}</h3>
    <div class="comment">
        @foreach($blog->comments as $comment)
            <p>{{$comment->comment}}</p>
            <p>{{$comment->created_at}}</p>
            <p>{{$comment->user->name}}</p>
        @endforeach
    </div>
    <form action="/blog/{{$blog->id}}/comments" method="post">
        @csrf
        <textarea id="comment" name="comment" placeholder="Plaats een reactie"></textarea>
        <input id="versturen" type="submit">
    </form>
</body>
</html>
