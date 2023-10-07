@extends('layouts.mainlayout')

@section('title','Teacher')
@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-end mx-4">
            <a href="/teacher-add">
                <button type="button" class="btn btn-success">Tambah +</button>
            </a>
        </div>
        <br>
        <div class="card">
            <h5 class="card-header">List Prestasi</h5>
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Foto</th>
                                <th style="width: 10px">Actions</th>
                            </tr>
                        </thead>
                    <tbody>
                        @forelse ($teachers as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->jabatan }}</td>
                            <td>
                                <img src="{{ asset('storage/cover/'.$item->cover) }}" alt="" width="150px">
                            </td>
                            <td>
                                <a href="/teacher-edit/{{ $item->slug }}">
                                    <button type="button" class="btn btn-primary">Edit </button>
                                </a>
                                <a href="/teacher-delete/{{ $item->slug }}">
                                    <button type="button" class="btn btn-danger">Hapus </button>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center" > Data Kosong</td>
                        </tr>
                        @endforelse
                        
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection