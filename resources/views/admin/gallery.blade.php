@extends('layouts.mainlayout')
@section('title','Gallery')
@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
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
    </div>
</div>
@endsection