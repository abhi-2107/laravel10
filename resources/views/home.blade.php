@extends('layout')

@section('content')

@foreach ($posts as $post)
<div class="container px-5 mb-4 border-bottom ">
    <h3><a href="/posts/{{ $post->id}}">{{ $post->title }}</a></h3>
    <p><a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
    <p>{{ $post->excerpt }}</p>
</div>

@endforeach
@endsection