@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Create Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="content">Content ru</label>
            <textarea name="content_ru" id="content" class="form-control" ></textarea>
        </div>
        <div class="form-group uz">
            <label for="content">Content uz</label>
            <textarea name="content_uz" id="content" class="form-control" ></textarea>
        </div>
        <div class="form-group en">
            <label for="content">Content en</label>
            <textarea name="content_en" id="content" class="form-control" ></textarea>
        </div>
        <div class="form-group">
            <label for="categories">Categories</label>
            <select name="categories[]" id="categories" class="form-control" required>
                @if($categories->isEmpty())
                    <option disabled selected>Sizda kategoriyalar yo'q</option>
                @else
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
