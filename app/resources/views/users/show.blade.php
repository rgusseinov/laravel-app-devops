@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <section class="bg-white dark:bg-gray-900">
            <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
                <div class="grid col-span-full">
                    <h2 class="mb-5">User Page: {{ $user->name }}<a href={{ url("/users/{$user->id}/edit") }}>⚙</a></h2>
                    <p><span class="font-black">Name:</span> {{ $user->name }}</p>
                    <p><span class="font-black">Email:</span> {{ $user->email }} </p>
                    <p><span class="font-black">Position title:</span> {{ $user->position }} </p>
                    <p><span class="font-black">Location:</span> {{ $user->location }} </p>
                </div>
            </div>
        </section>
    </div>