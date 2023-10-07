@extends('layouts.mainlayout')
@section('title','Prestasi')
@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="d-flex justify-content-end mx-4">
                <a href="/prestasi-add">
                    <button type="button" class="btn btn-success">Tambah +</button>
                </a>
            </div>
            <br>
            <div class="card">
                <h5 class="card-header">List Prestasi</h5>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-primary">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">No</th>
                                    <th>Nama</th>
                                    <th>Prestasi</th>
                                    <th>Tingkat</th>
                                    <th>Tahun</th>
                                    <th style="width: 10px">Actions</th>
                                </tr>
                            </thead>
                        <tbody>
                            @forelse ($prestasis as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->prestasi }}</td>
                                <td>{{ $item->tingkat }}</td>
                                <td>{{ $item->tahun }}</td>
                                <td>
                                    <a href="/prestasi-edit/{{ $item->slug }}">
                                        <button type="button" class="btn btn-primary">Edit </button>
                                    </a>
                                    <a href="/prestasi-delete/{{ $item->slug }}">
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