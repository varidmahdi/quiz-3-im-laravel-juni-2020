@extends('layouts.master')

@section('content')
<div class="ml-3 mt-3 mr-3">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Buat Artikel Baru</h3>
    </div>
    <!-- form start -->
    <form role="form" action="{{ url("/artikel") }}" method="POST">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="judul">Judul Artikel</label>
          <input type="text" class="form-control" id="judul" name="judul">
        </div>
        <div class="form-group">
          <label for="isi">Isi Artikel</label>
          <input type="text" class="form-control" id="isi" name="isi">
        </div>
        <div class="form-group">
          <label for="tag">Tag</label>
          <input type="text" class="form-control" id="tag" name="tag">
        </div>
      </div>
      <input type="hidden" name="tanggal_dibuat" value="{{ \Carbon\Carbon::now() }}">
      <input type="hidden" name="tanggal_diperbaharui" value="{{ \Carbon\Carbon::now() }}">
      <!-- /.card-body -->
  
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Terbitkan</button>
      </div>
    </form>
  </div>
</div>
@endsection