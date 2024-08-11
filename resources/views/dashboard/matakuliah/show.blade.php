@extends('dashboard.layouts.main')

@section('content')

<div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 text-muted">Detail Data Mahasiswa</h1>
</div>

<div class="row">
    <div class="col-12 col-md-8 col-lg-6 mx-auto">

        <div class="card shadow-sm border-0">
            <div class="card-header text-white" style="background-color: #6c757d;">
                <h5 class="mb-0">Informasi Mata Kuliah</h5>
            </div>
            <div class="card-body bg-light">

                <div class="mb-3">
                    <label for="nim" class="form-label fw-bold text-muted">Kode MK</label>
                    <p class="form-control-plaintext border p-2 rounded bg-white">{{ $matakuliah->kode_mk }}</p>
                </div>

                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label fw-bold text-muted">Nama MK</label>
                    <p class="form-control-plaintext border p-2 rounded bg-white">{{ $matakuliah->nama_mk }}</p>
                </div>

                <div class="mb-3">
                    <label for="nim" class="form-label fw-bold text-muted">SKS</label>
                    <p class="form-control-plaintext border p-2 rounded bg-white">{{ $matakuliah->semester }}</p>
                </div>

                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label fw-bold text-muted">Semester</label>
                    <p class="form-control-plaintext border p-2 rounded bg-white">{{ $matakuliah->semester }}</p>
                </div>


            </div>
        </div>

    </div>
</div>

<a href="/dashboard-mahasiswa/" class="btn btn-success btn-sm">Kembali</a>

@endsection
