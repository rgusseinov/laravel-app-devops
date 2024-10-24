@extends('layouts.app')

@section('content')

<h1>User Page</h1>
<p>List of system users.</p>

<table>
    <tr><th>User</th> <th> Email</th> <th>Location</th></tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td><a href="/users/{{ $user->id }}">{{ $user->email }}</a></td>
            <td>{{ $user->location }}</td>
        </tr>
    @endforeach
</table>
