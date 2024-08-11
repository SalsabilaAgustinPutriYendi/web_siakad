@extends('dashboard.layouts.main')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Jabatan</h1>
  </div>

  <div class="row">
    <div class="col-6">


<form method="post" action="/dashboard-jabatan/{{ $jabatan->id }}">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="kode_jabatan" class="form-label">kode_jabatan</label>
        <input type="text" class="form-control @error('kode_jabatan') is-invalid @enderror"
        name="kode_jabatan" id="kode_jabatan" value="{{ old('kode_jabatan' ,$jabatan->kode_jabatan) }}">
        @error('kode_jabatan')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror

      <div class="mb-3">
      <div class="mb-3">
        <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
        <input type="text" class="form-control @error('nama_jabatan') is-invalid @enderror"
        name="nama_jabatan" id="nama_jabatan" value="{{ old('nama_jabatan' ,$jabatan->nama_jabatan) }}">
        @error('nama_jabatan')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror



      <div class="mb-3">
        <label for="keterangan" class="form-label">Keterangan</label>
        <input type="keterangan" class="form-control @error('keterangan') is-invalid @enderror"
        name="keterangan" id="keterangan" value="{{ old('keterangan',$jabatan->keterangan) }}">
        @error('keterangan')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>

      {{-- <div class="mb-3">
        <label class="form-label">Prodi</label>
        <select name="prodi_id" class="form-select">
            <option value="">Pilih Prodi</option>
            @foreach ($prodis as $dataprodi)
                @if (old ('prodi_id', $mahasiswa->prodi_id)== $dataprodi->id)
                <option value="{{ $dataprodi->id }}" selected>{{ $dataprodi->nama }}</option>
                @else
                <option value="{{ $dataprodi->id }}">{{ $dataprodi->nama }}</option>
                @endif

            @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control @error('email') is-invalid @enderror" id="alamat" name="alamat" rows="3" value="">{{ old('alamat',$mahasiswa->alamat) }}</textarea>
        @error('alamat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror --}}
      </div>
      <div class="mb-3">

        <input type="submit" class="btn btn-primary" name="submit">
      </div>
</form>
</div>
</div>
@endsection
