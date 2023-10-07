@extends('layouts.mainlayout')

@section('title','Prestasi-Add')
@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-start ">
            <a href="/prestasi">
                <button type="button" class="btn btn-warning "> Kembali</button>
            </a>
        </div>
        <br>
        <div class="card mb-4">
            <h5 class="card-header">Tambah Data Prestasi</h5>
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
                <form action="/prestasi-add" method="post">
                    @csrf
                    <div class="my-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama" aria-describedby="defaultFormControlHelp">
                    </div>
                    <div class="my-3">
                        <label for="prestasi" class="form-label">Prestasi</label>
                        <input type="text" name="prestasi" class="form-control" id="prestasi" 
                        placeholder="Masukkan Prestasi" aria-describedby="defaultFormControlHelp">
                    </div>
                    <div class="my-3">
                        <label for="tingkat" class="form-label">Tingkat</label>
                        <input type="text" name="tingkat" class="form-control" id="tingkat" placeholder="Masukkan Tingkat" aria-describedby="defaultFormControlHelp">
                    </div>
                    <div class="my-3">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input type="text" name="tahun" class="form-control" id="tahun" placeholder="Masukkan Tahun" aria-describedby="defaultFormControlHelp">
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