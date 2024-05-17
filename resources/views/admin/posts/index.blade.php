@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>index Post</h1>
    <a href="{{route('posts.create')}}"><h1>create Post</h1></a>
    <ul>
        @if ($posts)
        @foreach ($posts as $post)
        <li> {{$post->content_en}}</li>
        <li> {{$post->content_uz}}</li>
        <li> {{$post->content_ru}}</li>
        @endforeach
        @endif
    </ul>

</div>
@endsection