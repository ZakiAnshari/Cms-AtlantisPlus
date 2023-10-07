@extends('layouts.frontend')
@section('title','Foto')
@section('content')
<div class="container-xxl bg-primary page-header">
    <div class="container text-center">
        <h1 class="text-white animated zoomIn mb-3">Foto</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Foto</li>
            </ol>
        </nav>
    </div>
</div>
<div class="mt-3" >
    <img
    src="{{ asset('backend/sneat-1.0.0/assets/img/illustrations/page-misc-error-light.png') }}"
    alt="page-misc-error-light"
    width="500"
    class="img-fluid"
    data-app-dark-img="{{ asset('backend/sneat-1.0.0/illustrations/page-misc-error-dark.png') }}"
    data-app-light-img="illustrations/page-misc-error-light.png"
    />
</div>
@endsection