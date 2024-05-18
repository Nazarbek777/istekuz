@extends('layouts.admin')

@section('content')

    <ul>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tables</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active"> Media List</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">


                    <a href="{{ route('media.create') }}">Create New Media</a>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th bold>#</th>
                                <th>Title</th>
                                <th>Url</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th bold>#</th>
                                <th>Title</th>
                                <th>Url</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @if (count($media) > 0)
                                @foreach ($media as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>
                                            {{ $item->name }}
                                        </td>
                                        <td>
                                            @if ($item->is_image)
                                                <img width="100" src="{{ asset('/') . 'storage/' . $item->url }}" alt="{{$item->name}}">
                                            @else
                                            <a href="{{ asset('/') . 'storage/' . $item->url }}">Open</a>
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{ route('media.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" class="text-center">Sizda postlar yo'q</td>
                                </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </ul>
@endsection
