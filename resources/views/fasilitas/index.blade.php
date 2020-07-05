@extends('layout.master')

@section('title', 'Fasilitas')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">

                <h1>Daftar Fasilitas</h1>

            </div>

            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">Daftar Fasilitas</li>

                </ol>

            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

</section>


<!-- Main content -->

<section class="content">



    <!-- Default box -->

    <div class="card">

        <div class="card-header">

            <h3 class="card-title"><a href="/fasilitas/create" class="btn btn-primary">Tambah Fasilitas</a></h3>



            <div class="card-tools">

                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">

                    <i class="fas fa-minus"></i></button>

                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>

            </div>
        </div>

        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama Fasilitas</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <tbody>
                    @foreach( $fasilitas as $fts )
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $fts->foto }}</td>
                        <td>{{ $fts->nama_fasilitas }}</td>
                        <td>{{ $fts->deskripsi }}</td>
                        <td>
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </tbody>
            </table>
        </div>
</section>
@endsection
<!-- /.content -->
<!-- /.card-body -->

<!-- /.card-footer-->



<!-- /.card -->