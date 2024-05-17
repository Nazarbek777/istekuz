@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Create Post</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
       
        <div class="form-group">
            <label for="content">Content</label>
            <input name="name" id="content" class="form-control" required />
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
