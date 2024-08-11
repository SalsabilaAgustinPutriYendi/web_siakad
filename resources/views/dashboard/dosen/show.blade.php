@extends('dashboard.layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Detail Dosen</h1>
</div>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Informasi Dosen</h4>
      </div>
      <div class="card-body">
        <table class="table table-striped">
          <tbody>
            <tr>
              <th scope="row">NIK</th>
              <td>{{ $dosen->nik }}</td>
            </tr>
            <tr>
              <th scope="row">Nama</th>
              <td>{{ $dosen->nama }}</td>
            </tr>
            <tr>
              <th scope="row">Email</th>
              <td>{{ $dosen->email }}</td>
            </tr>
            <tr>
                <th scope="row">No Telepon</th>
                <td>{{ $dosen->no_telp }}</td>
              </tr>
            <tr>
              <th scope="row">Prodi</th>
              <td>{{ $dosen->prodi->nama }}</td>
            </tr>
            <tr>
                <th scope="row">Jabatan</th>
                <td>{{ $dosen->jabatan }}</td>
              </tr>
            <tr>
              <th scope="row">Alamat</th>
              <td>{{ $dosen->alamat }}</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-footer">
        <a href="/dashboard-dosen" class="btn btn-primary">Kembali</a>
      </div>
    </div>
  </div>
</div>
@endsection
