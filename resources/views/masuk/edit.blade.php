@extends('layouts.master')
@section('judul','Edit Data Obat')
@section('content-header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Data Obat</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Data Obat</li>
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
        <form method="POST" action="/masuk/{{ $masuk->id }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Kode</label>
              <input type="text" value="{{$masuk->kode}}" name="kode" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Jenis Obat</label>
              <input type="text" value="{{$masuk->jenis_obat}}" name="jenis_obat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Harga</label>
              <input type="text" value="{{$masuk->harga}}" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tanggal Masuk</label>
              <input type="date" value="{{$masuk->tanggal_masuk}}" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Obat</label>
              <select name="obat" class="form-control" id="">
                <option value="">-Pilih Obat-</option>
                @foreach($obat as $data)
                <option value="{{$data->id}}" {{$masuk->obats_id == $data->id ? "selected" : "" }} >{{$data->kodeobat}} - {{$data->nm_obat}}</option>
                @endforeach
              </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Edit Data</button>
          </form>
      </div>
      <!-- /.card-body -->
      
    </div>
    <!-- /.card -->

  </section>
@endsection