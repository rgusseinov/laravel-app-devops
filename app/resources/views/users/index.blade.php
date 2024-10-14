@extends('layouts.app')

@section('content')

<h1>Users</h1>
<ul>
    @foreach ($users as $user)
        <li><a href="/users/{{ $user->id }}">{{ $user->name }}, {{ $user->email }}</a></li>
    @endforeach
</ul>