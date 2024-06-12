@extends('layouts.admin')

@section('content')    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Kategoriyalar</h4>
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
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                    <form action="{{ route('category.store')}}" method="post" class="needs-validation dropzone" enctype="multipart/form-data" novalidate id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                            @csrf
                            <h2>Nomi</h2>

                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Nomi O'zbek tilida</label>
                                <input type="text" class="form-control" id="validationCustom01" name="name_uz" placeholder="Nomini kiriting" required>
                            </div>
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Nomi Rus tilida</label>
                                <input type="text" class="form-control" id="validationCustom01" name="name_ru" placeholder="Nomini kiriting" required>
                            </div>
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Nomi Ingliz tilida</label>
                                <input type="text" class="form-control" id="validationCustom01" name="name_en" placeholder="Nomini kiriting" required>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-primary me-4" type="submit">Saqlash</button>
                                <a href="{{ route('category.index')}}" class="btn btn-danger" type="submit">O'chirish</a>
                            </div>
                        </form>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

        </div>

    </div> <!-- container -->
@endsection