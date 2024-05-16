@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Create Page</h1>
    <form action="{{ route('pages.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="text">Text</label>
            <textarea name="text" id="text" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" name="image" id="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
