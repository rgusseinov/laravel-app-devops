@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Posts</h1>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Some post">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        <br />
        <button type="button" class="btn btn-primary">Add Post</button>
    </div>  
    

    <h3>List of posts</h3>
    <ul>
    @foreach ($posts as $post)
        <li><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></li>
    @endforeach
</ul>
</div>