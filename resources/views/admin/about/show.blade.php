@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Biz haqimizda: {{ $about->name_uz }}</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                        <ol class="breadcrumb m-0 float-end">
                            <li class="breadcrumb-item"><a href="{{ route('about.index') }}">Bosh sahifa</a></li>
                            <li class="breadcrumb-item active">Biz haqimizda</li>
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
                        <p><strong>O'zbek tilida:</strong> {{ $about->name_uz }}</p>
                        <p><strong>Rus tilida:</strong> {{ $about->name_ru }}</p>
                        <p><strong>Ingliz tilida:</strong> {{ $about->name_en }}</p>
                        
                        <!-- Description -->
                        <h2 class="mt-4">Batafsil</h2>
                        <p><strong>O'zbek tilida:</strong> {{ $about->description_uz }}</p>
                        <p><strong>Rus tilida:</strong> {{ $about->description_ru }}</p>
                        <p><strong>Ingliz tilida:</strong> {{ $about->description_en }}</p>
                        
                        <div class="mt-3">
                            <a href="{{ route('about.index') }}" class="btn btn-secondary">Orqaga</a>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container -->
@endsection
