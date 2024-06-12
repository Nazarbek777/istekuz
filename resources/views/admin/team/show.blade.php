@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Jamoa: {{ $team->full_name }}</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                        <ol class="breadcrumb m-0 float-end">
                            <li class="breadcrumb-item"><a href="{{ route('team.index') }}">Bosh sahifa</a></li>
                            <li class="breadcrumb-item active">Jamoa</li>
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
                        <h2 class="mb-3">To'liq Ism</h2>
                        <p>{{ $team->full_name }}</p>
                        
                        <h2 class="mt-4">Kasbi</h2>
                        <p>{{ $team->job }}</p>
                        
                        <h2 class="mt-4">Qobilyati</h2>
                        <p>{{ $team->skill }}</p>
                        
                        <h2 class="mt-4">Tajribasi</h2>
                        <p>{{ $team->experience }}</p>
                        
                        <h2 class="mt-4">Facebook Manzili</h2>
                        <p>{{ $team->facebook_link }}</p>
                        
                        <h2 class="mt-4">Instagram Manzili</h2>
                        <p>{{ $team->instagram_link }}</p>
                        
                        <h2 class="mt-4">Telegram Manzili</h2>
                        <p>{{ $team->telegram_link }}</p>
                        
                        <h2 class="mt-4">YouTube Manzili</h2>
                        <p>{{ $team->youtube_link }}</p>
                        
                        <h2 class="mt-4">Batafsil</h2>
                        <p><strong>O'zbek tilida:</strong> {{ $team->description_uz }}</p>
                        <p><strong>Rus tilida:</strong> {{ $team->description_ru }}</p>
                        <p><strong>Ingliz tilida:</strong> {{ $team->description_en }}</p>
                        
                        <div class="mt-3">
                            <a href="{{ route('team.index') }}" class="btn btn-secondary">Orqaga</a>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container -->
@endsection
