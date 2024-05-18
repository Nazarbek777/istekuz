@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                
                <a  href="{{route('pages.create')}}">Create pages</a>
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
                            <th>Title</th>
                            <th>slug</th>
                            <th>Text</th>
                            <th>img</th>
                            <th>Action</th>
                            {{-- <th>Salary</th> --}}
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>slug</th>
                            <th>Text</th>
                            <th>img</th>
                            <th>Action</th>
                            {{-- <th>Salary</th> --}}
                        </tr>
                    </tfoot>
                    <tbody>
                        @if (count($pages) > 0)
                            @foreach ($pages as $page)
                                <tr>
                                    <td>
                                        <a href="{{ route('pages.show', $page->id) }}">

                                            <h5 class="en">{{ $page->title_en }}</h5>
                                            <h5 class="ru">{{ $page->title_ru }}</h5>
                                            <h5 class="uz">{{ $page->title_uz }}</h5>
                                        </a>
                                    </td>
                                    <td>{{ $page->slug }}</td>
                                    <td>
                                        <p class="card-text en">{{ $page->text_en }}</p>
                                        <p class="card-text ru">{{ $page->text_ru }}</p>
                                        <p class="card-text uz">{{ $page->text_uz }}</p>
                                    </td>
                                    <td>
                                        <img width="100px" height=""
                                            src="{{ asset('/') . 'storage/' . $page->image }}" alt="{{ $page->title_ru }}">
                                    </td>
                                    <td>
                                        <form action="{{ route('pages.destroy', $page->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-primary">Edit</a>
                                    </td>
                                    {{-- <td></td> --}}
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
@endsection
