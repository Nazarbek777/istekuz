@extends('layouts.admin')

@section('content')
 <div class="container-fluid">
    <!-- start page title -->
    <div class="py-3 py-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="page-title mb-0">Biz haqimizda: {{ $product->name_uz }}</h4>
            </div>
            <div class="col-lg-6">
                <div class="d-none d-lg-block">
                    <ol class="breadcrumb m-0 float-end">
                        <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Bosh sahifa</a></li>
                        <li class="breadcrumb-item active">Xizmatlar</li>
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
                    <h2 class="mb-3">Title</h2>
                    <p><strong>O'zbek tilida:</strong> {{ $product->name_uz }}</p>
                    <p><strong>Rus tilida:</strong> {{ $product->name_ru }}</p>
                    <p><strong>Ingliz tilida:</strong> {{ $product->name_en }}</p>

                    <!-- Content in different languages -->
                    <h2 class="mt-5 mb-3">Biz haqimizda batafsil</h2>
                    <div class="mb-3">
                        <h4>O'zbek tilida</h4>
                        <p>{{ $product->description_uz }}</p>
                    </div>
                    <div class="mb-3">
                        <h4>Rus tilida</h4>
                        <p>{{ $product->description_ru }}</p>
                    </div>
                    <div class="mb-3">
                        <h4>Ingliz tilida</h4>
                        <p>{{ $product->description_en }}</p>
                    </div>

                    <!-- Image display -->
                    @if ($product->image)
                    <div class="mb-3">
                        <h4>Rasm</h4>
                        <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid" alt="product Image">
                    </div>
                    @endif

                    <div class="mt-3">
                        <a href="{{ route('product.index') }}" class="btn btn-secondary">Orqaga</a>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->
</div> <!-- container -->
@endsection