@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>List category</h1>
    <a href="{{ route('categories.create') }}">  <h1>Create category</h1></a>
    <ul>
        @if ( $categories )
        @foreach ($categories as $category)
        <li>{{$category->name}}</li>
        @endforeach
        @else
        <p>Sizda kategoriyalar yo'q.</p>
        @endif
    </ul>
</div>
@endsection