@extends('layouts.frontend')
@section('title','Guru')
@section('content')
    <div class="container-xxl bg-primary page-header">
        <div class="container text-center">
            <h1 class="text-white animated zoomIn mb-3">Pencapaian</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Pencapaian</li>
                </ol>
            </nav>
        </div>
    </div>


    <div class="container">
        <div class="card">
            <h5 class="card-header text-center ">Daftar Prestasi</h5>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                    <tr class="table-dark">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Prestasi</th>
                        <th>Tingkat</th>
                        <th>Tahun</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($prestasi as $item)
                    <tr class="">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->prestasi }}</td>
                        <td>{{ $item->tingkat }}</td>
                        <td>{{ $item->tahun }}</td>
                        
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
@endsection