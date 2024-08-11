@extends('layouts.main')
@section('title', 'Data User')
@section('navUser', 'active')

@section('content')
<h1>Daftar User</h1>
<table class="table table-bordered table-striped">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $loop->index + 1 }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
    </tr>
    @endforeach
</table>

{{ $users->links() }}
@endsection
