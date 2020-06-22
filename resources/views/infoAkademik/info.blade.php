@extends('layout.master')

@section('title', 'Info Akademik')

@section('content')

<!-- Content Header (Page header) -->

<section class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <h1>{{$judul}}</h1>

          </div>

          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="#">Home</a></li>

              <li class="breadcrumb-item active">{{$judul}}</li>

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

          <h3 class="card-title"><a href="/info/create" class="btn btn-primary">Tambah Data Info Akademik</a></h3>



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
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <!-- <th scope="col">Info</th>              -->
                <th scope="col">Aksi</th>             
              </tr>
            </thead>
            <tbody>
              @foreach( $info as $inf)
              <tr>
                <th scope="row">{{ $loop->iteration}}</th>
                <td>{{ $inf->judul_info }}</td>
                <td>
                  <a href="/info/{{ $inf->id }}" class="badge badge-info">detail</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
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