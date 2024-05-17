@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Pages</h1>
        <a href="{{ route('pages.create') }}" class="btn btn-primary">Create Page</a>
        <ul>
            @foreach ($pages as $page)
                <div class="card mb-3">
                    <img width="100px" height="100px" src="{{ asset('/') . 'storage/' . $page->image }}" class="" alt="...">
                    <div class="card-body">
                        <h5 class="card-title en">{{ $page->title_en }}</h5>
                        <h5 class="card-title ru">{{ $page->title_ru }}</h5>
                        <h5 class="card-title uz">{{ $page->title_uz }}</h5>
                        <h5 class="card-title">{{ $page->slug }}</h5>
                        <p class="card-text en">{{ $page->text_en }}</p>
                        <p class="card-text ru">{{ $page->text_ru }}</p>
                        <p class="card-text uz">{{ $page->text_uz }}</p>

                        <a href="{{ route('pages.show', $page->id) }}" class="btn btn-primary">Read More</a>
                        <form action="{{ route('pages.destroy', $page->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
            @endforeach
        </ul>
    </div>
@endsection
