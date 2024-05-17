@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Page</h1>
    <form action="{{ route('pages.update', $page->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group en">
            <label for="title_en">Title (English)</label>
            <input type="text" name="title_en" id="title_en" class="form-control" value="{{ $page->title_en }}">
        </div>
        <div class="form-group en">
            <label for="text_en">Text (English)</label>
            <textarea name="text_en" id="text_en" class="form-control">{{ $page->text_en }}</textarea>
        </div>

        <div class="form-group ru">
            <label for="title_ru">Title (Russian)</label>
            <input type="text" name="title_ru" id="title_ru" class="form-control" value="{{ $page->title_ru }}">
        </div>
        <div class="form-group ru">
            <label for="text_ru">Text (Russian)</label>
            <textarea name="text_ru" id="text_ru" class="form-control">{{ $page->text_ru }}</textarea>
        </div>

        <div class="form-group uz">
            <label for="title_uz">Title (Uzbek)</label>
            <input type="text" name="title_uz" id="title_uz" class="form-control" value="{{ $page->title_uz }}">
        </div>
        <div class="form-group uz">
            <label for="text_uz">Text (Uzbek)</label>
            <textarea name="text_uz" id="text_uz" class="form-control">{{ $page->text_uz }}</textarea>
        </div>

        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control" value="{{ $page->slug }}">
            @error('slug')
                <span class="text-red">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            @if($page->image)
                <div>
                    <img src="{{ asset('storage/' . $page->image) }}" alt="{{ $page->title }}" width="150">
                </div>
            @endif
            <input type="file" name="image" id="image" class="form-control">
            @error('image')
                <span class="text-red">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection