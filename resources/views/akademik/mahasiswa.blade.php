{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nilai Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    {{-- {{-- <ol>
        <li><?php echo $mahasiswa['mhs1'] ?></li>
        <li><?php echo $mahasiswa['mhs2'] ?></li>
        <li><?php echo $mahasiswa['mhs3'] ?></li>
        <li><?php echo $mahasiswa['mhs4'] ?></li>
    </ol> --}}

    {{-- <ol>
        <?php foreach ($mahasiswa as $key => $value) { ?>
            <li><?= $value ?></li>
        <?php } ?>
    </ol> --}}

    {{-- <ol>
        {{-- <?php foreach ($mahasiswa as $key => $value) { ?>
            <li><?= $value ?></li>
        <?php } ?> --}}

        {{-- <li><?= $mhs1 ?></li>
        <li>Taylor</li>
        <li>Mark</li>
        <li>Harry</li>
        <li>Anna</li>
    </ol>

    <div>
        Padang, &copy; <?= date("Y") ?> PNP
    </div> --}}

{{-- </body>
</html> --}} --}} --}} --}}

@extends('layouts.main')
@section('title')
@section('navMhs','active')

@section('content')
<h1>Daftar Mahasiswa Jurusan TI</h1>
<table class="table table-bordered table-striped">
    <tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Tempat_lahir</th>
        <th>Tgl_lahir</th>
        <th>email</th>
        {{-- <th>Prodi</th>
        <th>Ipk</th> --}}
        <th>Alamat</th>
    </tr>
    @foreach ($mahasiswas as $mahasiswa)
        <tr>
            <td>{{ $mahasiswas -> firstItem()+$loop->index }}</td>
            <td>{{ $mahasiswa -> nim }}</td>
            <td>{{ $mahasiswa -> nama_lengkap }}</td>
            <td>{{ $mahasiswa -> nama_lengkap }}</td>
            <td>{{ $mahasiswa -> tgl_lahir }}</td>
            <td>{{ $mahasiswa -> email }}</td>
            {{-- <td>{{ $mahasiswa -> prodi }}</td>
            <td>{{ $mahasiswa -> ipk }}</td> --}}
            <td>{{ $mahasiswa -> alamat }}</td>
        </tr>

    @endforeach

</table>

{{ $mahasiswas->links() }}
@endsection
