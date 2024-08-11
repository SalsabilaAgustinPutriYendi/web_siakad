@extends('dashboard.layouts.main')

@section('title', 'Detail Prodi')

@section('content')
    <h1>Detail Prodi</h1>
    <table class="table table-bordered">
        <tr>
            <th>Nama Prodi</th>
            <td>{{ $prodi->nama }}</td>
        </tr>

    </table>
    <a href="/dashboard-prodi" class="btn btn-primary">Kembali</a>
@endsection
