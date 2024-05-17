@extends('layouts.app')

@section('content')

    <h1>{{ $media->name }}</h1>
    <p>Type: {{ $media->url }}</p>
    {{-- <p>Catalog: {{ $media->catalog->name }}</p> --}}
    <a href="{{ route('media.index') }}">Back to list</a>
@endsection