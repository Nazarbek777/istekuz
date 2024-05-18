@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>index Post</h1>
    <a href="{{route('posts.create')}}"><h1>create Post</h1></a>
    <ul>
        @if ($posts)
        @foreach ($posts as $post)
        <li> <span>{{$post->id}}</span>
            <span> 
                {{$post->content_uz}}
            </span>
            <span>
                {{$post->content_en}}
            </span>
            <span>
                {{$post->content_ru}}
            </span>
        </li>
       
        @endforeach
        @endif
    </ul>

</div>
@endsection