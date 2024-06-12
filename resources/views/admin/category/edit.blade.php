@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Kategoriyani Tahrirlash</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                        <ol class="breadcrumb m-0 float-end">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Bosh sahifa</a></li>
                            <li class="breadcrumb-item active">Kategoriyalar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('category.update', $category->id)}}" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                            @csrf
                            @method('PUT')
                            <h2>Nomi</h2>

                            <div class="mb-3">
                                <label for="title_uz" class="form-label">Nomi O'zbek tilida</label>
                                <input type="text" class="form-control" id="title_uz" name="name_uz" value="{{ $category->name_uz }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="title_ru" class="form-label">Nomi Rus tilida</label>
                                <input type="text" class="form-control" id="title_ru" name="name_ru" value="{{ $category->name_ru }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="title_en" class="form-label">Nomi Ingliz tilida</label>
                                <input type="text" class="form-control" id="title_en" name="name_en" value="{{ $category->name_en }}" required>
                            </div>

                            

                            <div class="mt-3">
                                <button class="btn btn-primary me-4" type="submit">Saqlash</button>
                                <a href="{{ route('category.index')}}" class="btn btn-danger" type="button">Bekor qilish</a>
                            </div>
                        </form>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
    </div> <!-- container -->
@endsection