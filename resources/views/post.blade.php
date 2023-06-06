@extends('layout')

@section('content')
<!-- {{$post}} -->
<div class="w-50 mx-auto">
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
    <p><a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
    <a href="/">Go back</a>
</div>
@endsection