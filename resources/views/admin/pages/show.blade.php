@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $page->title }}</h1>
    <p>{{ $page->text }}</p>
    <p><strong>Slug:</strong> {{ $page->slug }}</p>
    @if($page->image)
        <p><strong>Image:</strong> <img src="{{ $page->image }}" alt="{{ $page->title }}"></p>
    @endif
    <a href="{{ route('pages.index') }}" class="btn btn-primary">Back to Pages</a>
</div>
@endsection
