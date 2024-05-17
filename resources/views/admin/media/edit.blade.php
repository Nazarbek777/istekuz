@extends('layouts.admin')

@section('content')
    <h1>Edit Media</h1>
    <form action="{{ route('media.update', $media->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{ $media->name }}">
        </div>
        <div>
            <label>Type</label>
            <input type="text" name="url" value="{{ $media->type }}">
        </div>
        <div>
            <label>Catalog</label>
            <select name="catalog_id">
                @foreach($catalogs as $catalog)
                    <option value="{{ $catalog->id }}" {{ $catalog->id == $media->catalog_id ? 'selected' : '' }}>
                        {{ $catalog->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection