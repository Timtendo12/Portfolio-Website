@extends('template.app')
@section('content')
    <link rel="stylesheet" href="blogcss/style.blog.css">
    <h1>Mijn blog.</h1>
    @foreach ($blogs as $blog)
        <div class="post">
            <h1>{{$blog->title}}</h1>
            <p>{{$blog->post}}</p>
            <h3>{{$blog->created_at}}</h3>
            <h2>{{$blog->user->name}}</h2>
            <div class="comment">
                @foreach($blog->comments as $comment)
                <p>{{$comment->comment}}</p>
                <p>{{$comment->created_at}}</p>
                <p>{{$comment->user->name}}</p>
                @endforeach
            </div>
        </div>
    <form action="/blog/{{$blog->id}}/comments" method="post">
        @csrf
        <textarea id="comment" name="comment" placeholder="Plaats een reactie"></textarea>
        <input id="versturen" type="submit">
    </form>
    @endforeach
@endsection
