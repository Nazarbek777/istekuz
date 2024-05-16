@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Page</h1>
    <form action="{{ route('pages.update', $page->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $page->title }}" required>
        </div>
        <div class="form-group">
            <label for="text">Text</label>
            <textarea name="text" id="text" class="form-control" required>{{ $page->text }}</textarea>
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control" value="{{ $page->slug }}" required>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" name="image" id="image" class="form-control" value="{{ $page->image }}">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
