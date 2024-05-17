@extends('layouts.admin')

@section('content')
    <h1>Create Media</h1>
    <form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label>Type</label>
            <input type="file" name="url">
        </div>
        <div>
            <label>Catalog</label>
            <select name="catalog_id">
                @foreach($catalogs as $catalog)
                    <option value="{{ $catalog->id }}">{{ $catalog->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Save</button>
    </form>
@endsection
