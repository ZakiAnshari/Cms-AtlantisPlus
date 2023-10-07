@extends('layouts.mainlayout')

@section('title','Teacher-Edit')
@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-start ">
            <a href="/teacher">
                <button type="button" class="btn btn-warning "> Kembali</button>
            </a>
        </div>
        <br>
        <div class="card mb-4">
            <h5 class="card-header">Edit Data Teacher</h5>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/teacher-edit/{{ $teacher->slug }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="my-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama" aria-describedby="defaultFormControlHelp" 
                                value="{{ $teacher->name }}">
                            </div>
                            <div class="my-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" name="jabatan" class="form-control" id="jabatan" 
                                placeholder="Masukkan Jabatan" aria-describedby="defaultFormControlHelp" value="{{ $teacher->jabatan }}">
                            </div>
                            <div class="my-3">
                                <div class="my-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" name="image" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="my-3">
                                <label for="image" class="form-label" style="display: block">Image</label>
                                @if ($teacher->cover!='')
                                    <img src="{{ asset('storage/cover/'.$teacher->cover) }}" alt="" width="200px">
                                @else
                                    <img src="{{ asset('images/guru.png') }}" alt="" width="200px">
                                @endif
                            </div>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary"> Save </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection