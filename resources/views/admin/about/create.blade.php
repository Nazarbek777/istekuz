@extends('layouts.admin')

@section('content') <!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="py-3 py-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="page-title mb-0">Biz haqimizda</h4>
            </div>
            <div class="col-lg-6">
                <div class="d-none d-lg-block">
                    <ol class="breadcrumb m-0 float-end">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Bosh sahifa</a></li>
                        <li class="breadcrumb-item active">Biz haqimizda</li>
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

                    <form action="{{ route('about.store')}}" method="post" class="needs-validation dropzone" enctype="multipart/form-data" novalidate id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                        @csrf
                        <h2>Kategoriyalar</h2>
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Kategoriyani tanlang</label>
                            <select class="form-control" id="category_id" name="category_name" required>
                                <option value="">Kategoriyani tanlang</option>
                                <option value="istekHaqida">Istek Haqida</option>
                                <option value="missiya">Missiya</option>
                                <option value="istekKompaniyasi">Istek Kompaniyasida Ishlash</option>
                            </select>
                        </div>
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
                        <h2 class="mt-5">Yangiliklar haqida batafsil</h2>
                        <div class="mb-3">
                            <label for="description_uz" class="form-label">Yangiliklar haqida batafsil O'zbek tilida</label>
                            <textarea name="description_uz" class="form-control" id="description_uz" placeholder="Yangiliklar haqida batafsil Uz" rows="4" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description_ru" class="form-label">Yangiliklar haqida batafsil Rus tilida</label>
                            <textarea name="description_ru" class="form-control" id="description_ru" placeholder="Yangiliklar haqida batafsil Ru" rows="4" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description_en" class="form-label">Yangiliklar haqida batafsil Ingliz tilida</label>
                            <textarea name="description_en" class="form-control" id="description_en" placeholder="Yangiliklar haqida batafsil En" rows="4" required></textarea>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-primary me-4" type="submit">Saqlash</button>
                            <a href="{{ route('about.index')}}" class="btn btn-danger" type="submit">O'chirish</a>
                        </div>
                    </form>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
</div> <!-- container -->
@endsection