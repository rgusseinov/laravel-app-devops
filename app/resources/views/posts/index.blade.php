@extends('layouts.app')

@section('content')

<h1>Posts</h1>
<p>List of latest posts</p>
<ul>
    @foreach ($posts as $post)
        <li><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></li>
    @endforeach
</ul>