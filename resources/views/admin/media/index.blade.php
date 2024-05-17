@extends('layouts.admin')

@section('content')
    <h1>Media List</h1>
    <a href="{{ route('media.create') }}">Create New Media</a>
    <ul>
        @foreach ($media as $item)
            <li>
                <a href="{{ route('media.show', $item->id) }}">{{ $item->name }} url = {{ $item->url }}</a>
                <a href="{{ route('media.edit', $item->id) }}">Edit</a>
                <form action="{{ route('media.destroy', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden"  name="id" value="{{$item->id}}" />
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection