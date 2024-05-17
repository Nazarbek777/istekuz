@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h1>{{ $page->title }}</h1>
        </div>
        <div class="card-body">
            <div class="form-group ru">
                <label for="title_ru">Title (Russian)</label>
                <p id="title_ru">{{ $page->title_ru }}</p>
            </div>
            <div class="form-group ru">
                <label for="text_ru">Text (Russian)</label>
                <p id="text_ru">{{ $page->text_ru }}</p>
            </div>
            
            <div class="form-group en">
                <label for="title_en">Title (English)</label>
                <p id="title_en">{{ $page->title_en }}</p>
            </div>
            <div class="form-group en">
                <label for="text_en">Text (English)</label>
                <p id="text_en">{{ $page->text_en }}</p>
            </div>

            <div class="form-group uz">
                <label for="title_uz">Title (Uzbek)</label>
                <p id="title_uz">{{ $page->title_uz }}</p>
            </div>
            <div class="form-group uz">
                <label for="text_uz">Text (Uzbek)</label>
                <p id="text_uz">{{ $page->text_uz }}</p>
            </div>

            <p><strong>Slug:</strong> {{ $page->slug }}</p>
            @if($page->image)
                <p><strong>Image:</strong></p>
                <img src="{{ asset('storage/' . $page->image) }}" alt="{{ $page->title }}" class="img-fluid">
            @endif
            <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-primary">Edit</a>
            <a href="{{ route('pages.index') }}" class="btn btn-primary mt-3">Back to Pages</a>
        </div>
    </div>
</div>
@endsection
