@extends('layouts.mainlayout')
@section('title','Delete')
@section('content')
<div class="content-wrapper">

    <div class="card m-4">
        <div class="d-flex align-items-end row">
        <div class="col-sm-7">
            <div class="card-body">
            <h3 class="card-title text-primary"> Apa anda yakin ingin menghapus data <br>
                {{ $teacher->name }} ..?</h3>

                <a href="/teacher-destroy/{{  $teacher->slug }}">
                    <button type="button" class="btn btn-danger">Iya </button>
                </a>
                <a href="/teacher" class="mx-3">
                    <button type="button" class="btn btn-primary">Tidak</button>
                </a>
            </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
            <div class="card-body pb-0 px-0 px-md-4">
            <img
                src="{{ asset('backend/sneat-1.0.0/assets/img/illustrations/man-with-laptop-light.png') }}"
                height="140"
                alt="View Badge User"
                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                data-app-light-img="illustrations/man-with-laptop-light.png"
            />
            </div>
        </div>
        </div>
    </div>

</div>
@endsection