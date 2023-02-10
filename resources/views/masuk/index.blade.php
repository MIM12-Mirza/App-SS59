@extends('layouts.master')
@section('judul','Obat Masuk')
@section('content-header')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Obat</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Obat</li>
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
        <a href="/obat/form" class="btn btn-sm btn-primary">Tambah Data</a>

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
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Kode Obat</th>
              <th scope="col">Nama Obat</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($obat as $item)
            <tr>
              <th scope="row">{{$nomor++}}</th>
              <td>{{$item->kodeobat}}</td>
              <td>{{$item->nm_obat}}</td>
              <td>
                <a href="/obat/edit/{{$item->id}}" class="btn btn-sm btn-info">Edit</a>
                {{-- TOMBOL --}}
                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-default{{$item->id}}">
                  Hapus
                </button>
                <div class="modal fade" id="modal-default{{$item->id}}">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Peringatan!</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Yakin Data Obat {{$item->nm_obat}} Di Hapus?</p>
                      </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <form action="/obat/{{$item->id}}" method="POST">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-primary">Hapus</button>
                        </form>
                
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
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