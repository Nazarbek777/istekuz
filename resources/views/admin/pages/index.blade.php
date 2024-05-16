@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Pages</h1>
    <a href="{{ route('pages.create') }}" class="btn btn-primary">Create Page</a>
    <ul>
        @foreach($pages as $page)
            <li><a href="{{ route('pages.show', $page->id) }}">{{ $page->title }}</a></li>
        @endforeach
    </ul>
</div>
@endsection
