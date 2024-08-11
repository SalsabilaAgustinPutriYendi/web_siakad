@extends('dashboard.layouts.main')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Input Data Jabatan</h1>
  </div>

  <div class="row">
    <div class="col-6">


<form action="/dashboard-jabatan" method="post">
    @csrf
    <div class="mb-3">
        <label for="kode_jabatan" class="form-label">Kode Jabatan</label>
        <input type="number" class="form-control @error('kode_jabatan') is-invalid @enderror" name="kode_jabatan" id="kode_jabatan"
        value="{{ old ('kode_jabatan') }}">
        @error('kode_jabatan')
            <div>
                {{ $message }}
            </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
        <input type="text" class="form-control @error('nama_jabatan') is-valid
         @enderror" name="nama_jabatan" id="nama_jabatan" value="{{ old ('nama_jabatan') }}">

         {{-- <div class="mb-3">
            <label class="form-label">jabatan</label>
            <select name="jabatan_id" class="form-select">
                <option value="">Pilih Prodi</option>
                @foreach ($jabatans as $datajabatan)
                    <option value="{{ $datajabatan->id }}">{{ $datajabatan->nama }}</option>

                @endforeach
            </select>
          </div> --}}

        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" class="form-control @error('keterangan') is-valid
             @enderror" name="keterangan" id="keterangan" value="{{ old ('keterangan') }}">
          <div class="mb-3">
            <input type="submit" class="btn btn-primary" name="submit">
          </div>
      </div>
</form>
</div>
</div>
@endsection
