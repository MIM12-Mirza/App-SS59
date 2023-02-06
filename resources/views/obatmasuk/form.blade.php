@extends('layouts.master')
@section('judul','Tambah Data Obat Masuk')
@section('content-header')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Data Obat</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active">Tambah Data Obat</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>  
@endsection

@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        {{-- <a href="/obat/form" class="btn btn-sm btn-primary">Tambah Data</a> --}}

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <form method="POST" action="/obatmasuk">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Kode Obat</label>
              <input type="text" name="kode" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Asal Obat</label>
              <input type="text" name="obat" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tanggal Obat Masuk</label>
                <input type="date" name="obat" class="form-control" id="exampleInputPassword1">
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama Obat</label>
                <select name="obat" class="form-control" id="">
                    <option value=""> Pilih Nama Obat </option>
                    @foreach($masuk as $data)
                    <option value="{{$data->id}}">{{$data->kode}}- {{$data->nm_obat}}</option>
                    @endforeach
                </select>
              </div>
            <button type="submit" class="btn btn-primary">Done</button>
          </form>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        MIM12
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
@endsection