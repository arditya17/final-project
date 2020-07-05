@extends('layout.multi')

@section('title', 'Perusahaan')

@section('content')

<div class="card-body">
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <!-- <th scope="col">Info</th>              -->
        <th scope="col">Aksi</th>             
        </tr>
    </thead>
    <tbody>
        @foreach( $magang as $mng)
        <tr>
        <th scope="row">{{ $loop->iteration}}</th>
        <td>{{ $mng->nama_magang }}</td>
        <td>
            <a href="/berandaPerusahaan/{{ $mng->id }}" class="badge badge-info">detail</a>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>

@endsection