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
        <form method="post" action="/konsentrasi"> 
        @csrf
            <div class="form-group">
                <label for="nama">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul">
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi 1</label>
                <input type="text" class="form-control" id="deskripsi_1" name="deskripsi_1">
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi 2</label>
                <input type="text" class="form-control" id="deskripsi_2" name="deskripsi_2">
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