@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <section class="bg-white dark:bg-gray-900">
            <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
                <div class="grid col-span-full">
                    <h2 class="mb-5">Просмотр поста: {{ $post->title }}<a href={{ url("/posts/{$post->id}/edit") }}>⚙</a></h2>
                    <p><span class="font-black">Имя:</span> {{ $post->title }}</p>
                    <p><span class="font-black">Описание:</span> {{ $post->content }} </p>
                    <p><span class="font-black">Дата публикации:</span> {{ $post->publish_date }} </p>
                    <p><span class="font-black">Автор:</span> {{ $post->author }} </p>
                </div>
            </div>
        </section>
    </div>