@extends('layouts.admin')

@section('content') <!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="py-3 py-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="page-title mb-0">Yangiliklar</h4>
            </div>
            <div class="col-lg-6">
                <div class="d-none d-lg-block">
                    <ol class="breadcrumb m-0 float-end">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Bosh sahifa</a></li>
                        <li class="breadcrumb-item active">Yangiliklar</li>
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

                    <form action="{{ route('news.store')}}" method="post" class="needs-validation dropzone" enctype="multipart/form-data" novalidate id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                        @csrf

                        <h2>Nomi</h2>
                        <div class="mb-3">
                            <label for="validationCustom01" class="form-label">Nomi O'zbek tilida</label>
                            <input type="text" class="form-control" id="validationCustom01" name="name_uz" placeholder="Nomini kiriting" required>
                        </div>
                        <div class="mb-3">
                            <label for="validationCustom02" class="form-label">Nomi Rus tilida</label>
                            <input type="text" class="form-control" id="validationCustom02" name="name_ru" placeholder="Nomini kiriting" required>
                        </div>
                        <div class="mb-3">
                            <label for="validationCustom03" class="form-label">Nomi Ingliz tilida</label>
                            <input type="text" class="form-control" id="validationCustom03" name="name_en" placeholder="Nomini kiriting" required>
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

                        <style>
                            .custom-file-input {
                                display: none;
                            }

                            .custom-file-label {
                                background-color: #f8f9fa;
                                color: #495057;
                                border: 1px solid #ced4da;
                                border-radius: 0.25rem;
                                padding: 0.375rem 0.75rem;
                                cursor: pointer;
                            }

                            .preview-image {
                                max-width: 90px;
                                max-height: 90px;
                                margin-top: 10px;
                            }

                            .delete-icon {
                                display: none;
                                cursor: pointer;
                                color: red;
                            }
                        </style>

                        <div class="mb-3 border rounded border-secondary-subtle">
                            <label for="fileInput1" class="custom-file-label" id="photoLabel1">Rasm Tanlash 850 x 480</label>
                            <input id="fileInput1" name="image" type="file" class="custom-file-input" onchange="displayFileName('fileInput1', 'photoLabel1', 'deleteIcon1')">
                            <i class="delete-icon fas fa-times-circle" id="deleteIcon1" onclick="deleteImage('fileInput1', 'photoLabel1', 'deleteIcon1')"></i>
                        </div>

                        <div id="imagePreview1" class="mb-3"></div>
                        <div class="mb-3 border rounded border-secondary-subtle">
                            <label for="fileInput2" class="custom-file-label" id="photoLabel2">Rasm Tanlash 80 x 80</label>
                            <input id="fileInput2" name="image2" type="file" class="custom-file-input" onchange="displayFileName('fileInput2', 'photoLabel2', 'deleteIcon2')">
                            <i class="delete-icon fas fa-times-circle" id="deleteIcon2" onclick="deleteImage('fileInput2', 'photoLabel2', 'deleteIcon2')"></i>
                        </div>

                        <div id="imagePreview2" class="mb-3"></div>

                        <script>
                            function displayFileName(inputId, labelId, iconId) {
                                var input = document.getElementById(inputId);
                                var label = document.getElementById(labelId);
                                var icon = document.getElementById(iconId);
                                var fileName = input.files[0].name;
                                label.textContent = fileName;
                                icon.style.display = 'block';

                                var previewId = inputId === 'fileInput1' ? 'imagePreview1' : 'imagePreview2';
                                displayImagePreview(input, previewId);
                            }

                            function displayImagePreview(input, previewId) {
                                var preview = document.getElementById(previewId);
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        var img = document.createElement('img');
                                        img.src = e.target.result;
                                        img.className = 'preview-image';
                                        preview.innerHTML = '';
                                        preview.appendChild(img);
                                    };
                                    reader.readAsDataURL(input.files[0]);
                                } else {
                                    preview.innerHTML = '';
                                }
                            }

                            function deleteImage(inputId, labelId, iconId) {
                                var input = document.getElementById(inputId);
                                var label = document.getElementById(labelId);
                                var icon = document.getElementById(iconId);
                                input.value = '';
                                label.textContent = inputId === 'fileInput1' ? 'Rasm Tanlash 850 x 480' : 'Rasm Tanlash 80 x 80';
                                icon.style.display = 'none';

                                var previewId = inputId === 'fileInput1' ? 'imagePreview1' : 'imagePreview2';
                                document.getElementById(previewId).innerHTML = '';
                            }
                        </script>

                        <div class="mt-3">
                            <button class="btn btn-primary me-4" type="submit">Saqlash</button>
                            <a href="{{ route('news.index')}}" class="btn btn-danger" type="submit">O'chirish</a>
                        </div>
                    </form>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
</div> <!-- container -->
@endsection
