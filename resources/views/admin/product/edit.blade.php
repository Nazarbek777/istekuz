@extends('layouts.admin')

@section('content')
    <?php
        $lang = \Illuminate\Support\Facades\App::getLocale();
        ?>
    <div class="container-fluid">
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Mahsulotni Yangilash</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                        <ol class="breadcrumb m-0 float-end">
                            <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Mahsulotlar</a></li>
                            <li class="breadcrumb-item active">Yangilash</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
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
                        <form action="{{ route('product.update', $product->id) }}" method="post" class="needs-validation dropzone" enctype="multipart/form-data" novalidate id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                            @csrf
                            @method('PUT')

                            <h2>Kategoriyalar</h2>
                            <div class="mb-3">
                                <label for="category_id" class="form-label">Kategoriyani tanlang</label>
                                <select class="form-control" id="category_id" name="category_id" required>
                                    <option value="">Kategoriyani tanlang</option>
                                    {{$categories}}
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name_uz }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <h2>Nomi</h2>
                            <div class="mb-3">
                                <label for="name_uz" class="form-label">Mavzu O'zbek tilida</label>
                                <input type="text" class="form-control" id="name_uz" name="name_uz" value="{{ $product->name_uz }}" placeholder="Nomi Uz" required>
                            </div>
                            <div class="mb-3">
                                <label for="name_ru" class="form-label">Mavzu Rus tilida</label>
                                <input type="text" class="form-control" id="name_ru" name="name_ru" value="{{ $product->name_ru }}" placeholder="Nomi Ru" required>
                            </div>
                            <div class="mb-3">
                                <label for="name_en" class="form-label">Mavzu Ingliz tilida</label>
                                <input type="text" class="form-control" id="name_en" name="name_en" value="{{ $product->name_en }}" placeholder="Nomi En" required>
                            </div>

                            <h2 class="mt-5">Yangiliklar haqida batafsil</h2>
                            <div class="mb-3">
                                <label for="description_uz" class="form-label">Yangiliklar haqida batafsil O'zbek tilida</label>
                                <textarea name="description_uz" class="form-control" id="description_uz" placeholder="Yangiliklar haqida batafsil Uz" rows="4" required>{{ $product->description_uz }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="description_ru" class="form-label">Yangiliklar haqida batafsil Rus tilida</label>
                                <textarea name="description_ru" class="form-control" id="description_ru" placeholder="Yangiliklar haqida batafsil Ru" rows="4" required>{{ $product->description_ru }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="description_en" class="form-label">Yangiliklar haqida batafsil Ingliz tilida</label>
                                <textarea name="description_en" class="form-control" id="description_en" placeholder="Yangiliklar haqida batafsil En" rows="4" required>{{ $product->description_en }}</textarea>
                            </div>
                            <h2>Narxi</h2>
                            <div class="mb-3">
                                <label for="price" class="form-label">    Narxi</label>
                                <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}" placeholder="Nomi Uz" required>
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
                                <label for="fileInput" class="custom-file-label" id="photoLabel">Rasm yoki Video Tanlash</label>
                                <input id="fileInput" name="image" type="file" class="custom-file-input" onchange="displayFileName()">
                                <i class="delete-icon fas fa-times-circle" id="deleteIcon" onclick="deleteMedia()"></i>
                            </div>

                            <div id="mediaPreview" class="mb-3">
                                @if ($product->image)
                                    @if (in_array(pathinfo($product->image, PATHINFO_EXTENSION), ['jpeg', 'png', 'jpg', 'gif']))
                                        <img src="{{ asset('storage/' . $product->image) }}" class="preview-image">
                                    @else
                                        <video src="{{ asset('storage/' . $product->image) }}" class="preview-image" controls></video>
                                    @endif
                                    <i class="delete-icon fas fa-times-circle" style="display: inline-block;" onclick="deleteExistingMedia()"></i>
                                @endif
                            </div>

                            <script>
                                document.getElementById('fileInput').addEventListener('change', function() {
                                    const file = this.files[0];
                                    if (file) {
                                        const reader = new FileReader();
                                        reader.onload = function(e) {
                                            const preview = document.createElement(file.type.startsWith('image/') ? 'img' : 'video');
                                            preview.classList.add('preview-image');
                                            preview.src = e.target.result;
                                            if (file.type.startsWith('video/')) {
                                                preview.controls = true;
                                            }
                                            document.getElementById('mediaPreview').innerHTML = '';
                                            document.getElementById('mediaPreview').appendChild(preview);
                                            // Show delete icon
                                            document.getElementById('deleteIcon').style.display = 'inline-block';
                                        };
                                        reader.readAsDataURL(file);
                                    } else {
                                        document.getElementById('mediaPreview').innerHTML = '';
                                        // Hide delete icon
                                        document.getElementById('deleteIcon').style.display = 'none';
                                    }
                                });

                                function displayFileName() {
                                    const input = document.getElementById('fileInput');
                                    const label = document.getElementById('photoLabel');
                                    const fileName = input.files[0].name;
                                    label.textContent = fileName;
                                }

                                function deleteMedia() {
                                    // Remove media preview
                                    document.getElementById('mediaPreview').innerHTML = '';
                                    // Clear file input
                                    document.getElementById('fileInput').value = '';
                                    // Hide delete icon
                                    document.getElementById('deleteIcon').style.display = 'none';
                                }

                                function deleteExistingMedia() {
                                    // Set an input field to mark existing media for deletion
                                    const input = document.createElement('input');
                                    input.type = 'hidden';
                                    input.name = 'delete_existing_media';
                                    input.value = '1';
                                    document.querySelector('form').appendChild(input);
                                    deleteMedia();
                                }
                            </script>

                            <div class="mt-3">
                                <button class="btn btn-primary me-4" type="submit">Yangilash</button>
                                <a href="{{ route('product.index')}}" class="btn btn-danger" type="submit">Bekor qilish</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
