@extends('layout.master')

@section('title', 'Detail Info')

@section('content')

<!-- Content Header (Page header) -->

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
          <h5 class="card-titile"> {{$konsentrasi->judul}} </h5>
        </div>

        <div class="card-body">
          <p>{{$konsentrasi->deskripsi_1}} </p>
          <p>{{$konsentrasi->deskripsi_2}} </p>

          <a href="{{ $konsentrasi->id }}/edit" class="btn btn-primary"> Edit</a>
          <form action="{{ $konsentrasi->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger"> Delete</button>
          </form>
          <a href="/konsentrasi" class="card-link">Kembali</a>
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