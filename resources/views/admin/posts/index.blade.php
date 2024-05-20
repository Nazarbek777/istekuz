@extends('layouts.admin')

@section('content')

    <div class="container">


        <ul>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Tables</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active"> Posts List</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-body">


                        <a href="{{ route('posts.create') }}">Create New Post</a>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        DataTable Post
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Uz</th>
                                    <th>Ru</th>
                                    <th>EN</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Uz</th>
                                    <th>Ru</th>
                                    <th>EN</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @if ($posts)
                                    @foreach ($posts as $item)
                                        <tr>
                                            <td>{{ $item->id}}</td>
                                            <td>
                                                {{ $item->content_uz }}
                                            </td>
                                            <td>
                                                {{ $item->content_ru }}
                                            </td>
                                            <td>
                                                {{ $item->content_en }}
                                            </td>
                                            <td>
                                                {{ $item->id}}
                                                <form action="{{ route('posts.destroy', $item->id) }}" method="POST">
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
    </div>
@endsection
