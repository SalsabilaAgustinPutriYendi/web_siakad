@extends('layouts.main')
@section('title', 'Data Prodi')
@section('navDosen', 'active')

{{-- @section('content')
<h1>Daftar Dosen</h1>
<ol>
    @forelse ($dosen as $namaDosen)
    <li>{{ $namaDosen }}</li>
    @empty
    <div class="alert alert-warning d-inline-block">
        Datat tidak ada..Silahkan isi array untuk data dosen!</div>
        @endforelse
</ol>
@endsection --}}

@section('content')
<h1>Daftar Prodi</h1>
<table class="table table-bordered table-striped">
    <tr>
        <th>No</th>
        <th>Nama</th>

    </tr>
    @foreach ($prodis as $prodi)
    <tr>
        <td>{{ $loop->index + 1 }}</td>
        <td>{{ $prodi->nama }}</td>

    </tr>

    @endforeach
</table>

{{ $prodis->links() }}
@endsection
