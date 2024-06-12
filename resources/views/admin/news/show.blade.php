@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Yangilik: {{ $news->name_uz }}</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                        <ol class="breadcrumb m-0 float-end">
                            <li class="breadcrumb-item"><a href="{{ route('news.index') }}">Bosh sahifa</a></li>
                            <li class="breadcrumb-item active">Yangilik</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Title in different languages -->
                        <h2 class="mb-3">Nomi</h2>
                        <p><strong>O'zbek tilida:</strong> {{ $news->name_uz }}</p>
                        <p><strong>Rus tilida:</strong> {{ $news->name_ru }}</p>
                        <p><strong>Ingliz tilida:</strong> {{ $news->name_en }}</p>
                        
                        <!-- Description -->
                        <h2 class="mt-4">Batafsil</h2>
                        <p><strong>O'zbek tilida:</strong> {{ $news->description_uz }}</p>
                        <p><strong>Rus tilida:</strong> {{ $news->description_ru }}</p>
                        <p><strong>Ingliz tilida:</strong> {{ $news->description_en }}</p>
                        <img src="/storage/{{ $news->image}}" style="width: 180px;" alt="">
                        <div class="mt-3">
                            <a href="{{ route('news.index') }}" class="btn btn-secondary">Orqaga</a>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container -->
@endsection
