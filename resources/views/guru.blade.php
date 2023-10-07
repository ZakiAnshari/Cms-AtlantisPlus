@extends('layouts.frontend')
@section('title','Guru')
@section('content')
<div class="container-xxl bg-primary page-header">
    <div class="container text-center">
        <h1 class="text-white animated zoomIn mb-3">Guru</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Guru</li>
            </ol>
        </nav>
    </div>
</div>
<div class="container-xxl py-6">
    <div class="container">
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Our Teacher</div>
            <h2 class="mb-5">Meet Our Teacher Members</h2>
        </div>
        <div class="row g-4">
            @foreach ($teacher as $item)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <h5>{{ $item->name }}</h5>
                    <p class="mb-4">{{ $item->jabatan }}</p>
                    <img class="img-fluid rounded-circle w-100 mb-4" src="{{ asset('storage/cover/'.$item->cover) }}"   draggable="false">
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-square text-primary bg-white m-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square text-primary bg-white m-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square text-primary bg-white m-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection