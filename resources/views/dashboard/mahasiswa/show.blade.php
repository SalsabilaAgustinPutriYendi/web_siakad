@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Detail Mahasiswa</h1>
</div>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Informasi Mahasiswa</h4>
      </div>
      <div class="card-body">
        <table class="table table-striped">
          <tbody>
            <tr>
              <th scope="row">NIM</th>
              <td>{{ $mahasiswa->nim }}</td>
            </tr>
            <tr>
              <th scope="row">Nama Lengkap</th>
              <td>{{ $mahasiswa->nama_lengkap }}</td>
            </tr>
            <tr>
              <th scope="row">Tempat / Tanggal Lahir</th>
              <td>{{ $mahasiswa->tempat_lahir }} , {{ date_format(date_create($mahasiswa->tgl_lahir), 'd F Y') }}</td>
            </tr>
            <tr>
              <th scope="row">Email</th>
              <td>{{ $mahasiswa->email }}</td>
            </tr>
            <tr>
              <th scope="row">Prodi</th>
              <td>{{ $mahasiswa->prodi->nama }}</td>
            </tr>
            <tr>
              <th scope="row">Alamat</th>
              <td>{{ $mahasiswa->alamat }}</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-footer">
        <a href="/dashboard-mahasiswa" class="btn btn-primary">Kembali</a>
      </div>
    </div>
  </div>
</div>
@endsection
