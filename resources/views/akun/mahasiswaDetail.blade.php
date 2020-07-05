@extends('layout.multi1')

@section('title', 'Perusahaan')

@section('content')

<section class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <h1>{{$detail}}</h1>

          </div>

          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="/">Home</a></li>

              <li class="breadcrumb-item active">{{$detail}}</li>

            </ol>

          </div>

        </div>

      </div><!-- /.container-fluid -->

    </section>



    <!-- Main content -->

    <section class="content">



      <!-- Default box -->

      <div class="card">

        <div class="card-header">
          <h5 class="card-titile"> {{$magang->nama_magang}} </h5>
        </div>

        <div class="card-body">
          <p>Nama Perusahaan :  {{$magang->nama_perusahaan}}</p>
          <p>Daftar Mahasiswa</p>
            <li>{{$magang->nama_mhs1}}</li>
            <li>{{$magang->nama_mhs2}}</li>
            <li>{{$magang->nama_mhs3}}</li>
            <li>{{$magang->nama_mhs4}}</li>
            <li>{{$magang->nama_mhs5}}</li>
          
          <a href="{{ $magang->id }}/edit" class="btn btn-primary"> Edit</a>
          
          <a href="/berandaPerusahaan" class="card-link">Kembali</a>
        </div>


@endsection