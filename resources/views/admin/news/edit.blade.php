@extends('layouts.admin')

@section('content')
    <!-- Start Content-->
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

                        <form action="{{ route('news.update', $news->id)}}" method="post" class="needs-validation dropzone" enctype="multipart/form-data" novalidate id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                            @csrf
                            @method('PUT')

                            <h2>Nomi</h2>

                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Nomi O'zbek tilida</label>
                                <input type="text" class="form-control" id="validationCustom01" name="name_uz" value="{{ $news->name_uz }}" placeholder="Nomini kiriting" required>
                            </div>
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Nomi Rus tilida</label>
                                <input type="text" class="form-control" id="validationCustom01" name="name_ru" value="{{ $news->name_ru }}" placeholder="Nomini kiriting" required>
                            </div>
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Nomi Ingliz tilida</label>
                                <input type="text" class="form-control" id="validationCustom01" name="name_en" value="{{ $news->name_en }}" placeholder="Nomini kiriting" required>
                            </div>
                            <h2 class="mt-5">Yangiliklar haqida batafsil</h2>

                            <div class="mb-3">
                                <label for="description_uz" class="form-label">Yangiliklar haqida batafsil O'zbek tilida</label>
                                <textarea name="description_uz" class="form-control" id="description_uz" placeholder="Yangiliklar haqida batafsil Uz" rows="4" required>{{ $news->description_uz }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="description_ru" class="form-label">Yangiliklar haqida batafsil Rus tilida</label>
                                <textarea name="description_ru" class="form-control" id="description_ru" placeholder="Yangiliklar haqida batafsil Ru" rows="4" required>{{ $news->description_ru }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="description_en" class="form-label">Yangiliklar haqida batafsil Ingliz tilida</label>
                                <textarea name="description_en" class="form-control" id="description_en" placeholder="Yangiliklar haqida batafsil En" rows="4" required>{{ $news->description_en }}</textarea>
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
                                <label for="fileInput1" class="custom-file-label" id="photoLabel1">Rasm 850 x 480</label>
                                <input id="fileInput1" name="image" type="file" class="custom-file-input" onchange="displayFileName('fileInput1', 'photoLabel1', 'mediaPreview1', 'deleteIcon1')">
                                <i class="delete-icon fas fa-times-circle" id="deleteIcon1" onclick="deleteMedia('fileInput1', 'photoLabel1', 'mediaPreview1', 'deleteIcon1')"></i>
                            </div>
                            <div id="mediaPreview1" class="mb-3">


                                    <img src="{{ asset('storage/' . $news->image) }}" class="preview-image" alt="image2">
                                    <i class="delete-icon fas fa-times-circle" style="display: inline-block;" onclick="deleteExistingMedia('existing_image', 'mediaPreview1', 'deleteIcon1')"></i>
                            </div>

                            <div class="mb-3 border rounded border-secondary-subtle">
                                <label for="fileInput2" class="custom-file-label" id="photoLabel2">Rasm 80 x 80</label>
                                <input id="fileInput2" name="image2" type="file" class="custom-file-input" onchange="displayFileName('fileInput2', 'photoLabel2', 'mediaPreview2', 'deleteIcon2')">
                                <i class="delete-icon fas fa-times-circle" id="deleteIcon2" onclick="deleteMedia('fileInput2', 'photoLabel2', 'mediaPreview2', 'deleteIcon2')"></i>
                            </div>
                            <div id="mediaPreview2" class="mb-3">

                                        <img src="{{ asset('storage/' . $news->image2) }}" class="preview-image">

                                    <i class="delete-icon fas fa-times-circle" style="display: inline-block;" onclick="deleteExistingMedia('existing_image2', 'mediaPreview2', 'deleteIcon2')"></i>

                            </div>

                            <script>
                                function displayFileName(fileInputId, labelId, previewId, deleteIconId) {
                                    const input = document.getElementById(fileInputId);
                                    const label = document.getElementById(labelId);
                                    const previewContainer = document.getElementById(previewId);
                                    const deleteIcon = document.getElementById(deleteIconId);

                                    if (input.files.length > 0) {
                                        const fileName = input.files[0].name;
                                        label.textContent = fileName;

                                        const reader = new FileReader();
                                        reader.onload = function(e) {
                                            const fileType = input.files[0].type;
                                            let previewElement;

                                            if (fileType.startsWith('image/')) {
                                                previewElement = document.createElement('img');
                                                previewElement.classList.add('preview-image');
                                                previewElement.src = e.target.result;
                                            } else if (fileType.startsWith('video/')) {
                                                previewElement = document.createElement('video');
                                                previewElement.classList.add('preview-image');
                                                previewElement.src = e.target.result;
                                                previewElement.controls = true;
                                            }

                                            previewContainer.innerHTML = '';
                                            previewContainer.appendChild(previewElement);
                                            deleteIcon.style.display = 'inline-block';
                                        };
                                        reader.readAsDataURL(input.files[0]);
                                    } else {
                                        previewContainer.innerHTML = '';
                                        deleteIcon.style.display = 'none';
                                    }
                                }

                                function deleteMedia(fileInputId, labelId, previewId, deleteIconId) {
                                    document.getElementById(fileInputId).value = '';
                                    document.getElementById(labelId).textContent = 'Rasm tanlang';
                                    document.getElementById(previewId).innerHTML = '';
                                    document.getElementById(deleteIconId).style.display = 'none';
                                }

                                function deleteExistingMedia(inputName, previewId, deleteIconId) {
                                    const hiddenInput = document.createElement('input');
                                    hiddenInput.type = 'hidden';
                                    hiddenInput.name = inputName;
                                    hiddenInput.value = '';
                                    document.getElementById(previewId).parentNode.appendChild(hiddenInput);

                                    document.getElementById(previewId).innerHTML = '';
                                    document.getElementById(deleteIconId).style.display = 'none';
                                }
                            </script>

                            <div class="col-12 mt-3 text-end">
                                <button class="btn btn-primary" type="submit">Saqlash</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
