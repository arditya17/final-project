@extends('layout.master')

@section('title', 'Tambah Data')

@section('content')

<!-- Content Header (Page header) -->

<section class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <h1></h1>

          </div>

          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="/">Home</a></li>

             
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

<h3 class="card-title">Form Tambah Data</h3>



<div class="card-tools">

  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">

    <i class="fas fa-minus"></i></button>

  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">

    <i class="fas fa-times"></i></button>

</div>

</div>

        <div class="card-body">
        <form method="post" action="/magang"> 
        @csrf
            <div class="form-group">
                <label for="nama_magang">Nama Magang</label>
                <input type="text" class="form-control" id="nama_magang" name="nama_magang">
            </div>

            <div class="form-group">
                <label for="nama_perusahaan">Nama Perusahaan</label>
                <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan">
            </div>
            <div class="form-group">
                <label for="nama_mhs1">Nama Mahasiswa 1</label>
                <input type="text" class="form-control" id="nama_mhs1" name="nama_mhs1">
            </div>
            <div class="form-group">
                <label for="nama_mhs2">Nama Mahasiswa 2</label>
                <input type="text" class="form-control" id="nama_mhs2" name="nama_mhs2">
            </div>
            <div class="form-group">
                <label for="nama_mhs3">Nama Mahasiswa 3</label>
                <input type="text" class="form-control" id="nama_mhs3" name="nama_mhs3">
            </div>
            <div class="form-group">
                <label for="nama_mhs4">Nama Mahasiswa 4</label>
                <input type="text" class="form-control" id="nama_mhs4" name="nama_mhs4">
            </div>
            <div class="form-group">
                <label for="nama_mhs5">Nama Mahasiswa 5</label>
                <input type="text" class="form-control" id="nama_mhs5" name="nama_mhs5">
            </div>

           
            <button type="submit" class="btn btn-primary mb-2">Simpan</button>
          <!-- <div class="form-group">
            <label for="judul_info">Judul</label>
            <input type="text" class="form-control" id="judul_info" placeholder="Masukan Judul">
          </div>

          <div class="form-group">
            <label for="isi_info">Isi</label>
            <input type="text" class="form-control" id="isi_info" Placeholder="Masukan Isi">
          </div>

          <button type="submit" class="btn btn-primary">Tambah Data</button> -->
          
        </form>
        </div>

        <!-- /.card-body -->

        <div class="card-footer">

          Footer

        </div>

        <!-- /.card-footer-->

      </div>

      <!-- /.card -->



    </section>

    <!-- /.content -->



@endsection