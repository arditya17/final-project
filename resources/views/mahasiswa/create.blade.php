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
        <form method="post" action="/mahasiswa"> 
        @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa">
            </div>

            <div class="form-group">
                <label for="nim">Nim</label>
                <input type="text" class="form-control" id="nim" name="nim">
            </div>

            <div class="form-group">
                <label for="kelas">Kelas</label>
                <select name="kelas" id="kelas" class="form-control" required>
                    <option value="">Kelas</option>
                    <option value="TI01">TI01</option>
                    <option value="TI02">TI02</option>
                    <option value="TI03">TI03</option>
                </select>
            </div>

            <div class="form-group">
                <label for="konsentrasi">Konsentrasi</label>
                <select name="konsentrasi" id="konsentrasi" class="form-control" required>
                    <option value="">Konsentrasi</option>
                    <option value="web">Web</option>
                    <option value="jaringan">Jaringan</option>
                    <option value="animasi">Animasi</option>
                </select>
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
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