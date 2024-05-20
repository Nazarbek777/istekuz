@extends('layouts.admin')

@section('content')
<div class="container px-md-4" >
        <h1>Create Media</h1>
        <div class="row">
            <form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class=" form-group col-4">
                    <label>Name</label>
                    <input class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label>Type</label>
                    <input class="form-control" type="file" name="url">
                </div>
                <div class="form-group">
                    <label>Catalog</label>
                    <select class="form-control" name="catalog_id">
                        @foreach($catalogs as $catalog)
                            <option value="{{ $catalog->id }}">{{ $catalog->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-success mx-5 my-3 px-5 " type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection
