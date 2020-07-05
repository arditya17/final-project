@extends('layout.master')

@section('title', 'Tambah Fasilitas')

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

            <h3 class="card-title">Form Tambah Fasilitas</h3>



            <div class="card-tools">

                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">

                    <i class="fas fa-minus"></i></button>

                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">

                    <i class="fas fa-times"></i></button>

            </div>

        </div>

        <div class="card-body">
            <form method="post" action="/fasilitas">
                @csrf
                <div class="form-group">
                    <label for="nama">Foto</label>
                    <input type="file" class="form-control" id="file" name="file">
                </div>

                <div class="form-group">
                    <label for="nama">Nama Fasilitas</label>
                    <input type="text" class="form-control" id="nama_fasilitas" name="nama_fasilitas">
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi">
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