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
        <form method="post" action="/perusahaan"> 
        @csrf
            <div class="form-group">
                <label for="nama_perusahaan">Nama Perusahaan</label>
                <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan">
            </div>

            <div class="form-group">
                <label for="daerah_perusahaan">Daerah Perusahaan</label>
                <input type="text" class="form-control" id="daerah_perusahaan" name="daerah_perusahaan">
            </div>

            <div class="form-group">
                <label for="jenis_perusahaan">Jenis Perusahaan</label>
                <select name="jenis_perusahaan" id="jenis_perusahaan" class="form-control" required>
                    <option value="">jenis_perusahaan</option>
                    <option value="web">Web</option>
                    <option value="jaringan">Jaringan</option>
                    <option value="animasi">Animasi</option>
                </select>
            </div>

            <div class="form-group">
                <label for="status">Status Lowongan</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="">Pilih Status</option>
                    <option value="open">Open</option>
                    <option value="Close">Close</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Simpan</button>

        <div class="card-footer">

          Footer

        </div>

        <!-- /.card-footer-->

      </div>

      <!-- /.card -->



    </section>

    <!-- /.content -->



@endsection