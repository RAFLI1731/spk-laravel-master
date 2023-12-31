@extends('layouts.adminLayout.adminLayout')

@section('cssContent')

@endsection

@section('content')
    <div class="card-body">
        <h2>Kamu belum mengisi Data Lansia</h2>
        <hr>
        @if ($alternatif->isEmpty())
    <p> Tidak Ada Data Lansia </p> <br>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahAlternatif">Tambah</button>



{{-- Form Tambah Alternatif --}}
<div class="modal fade" id="tambahAlternatif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Lansia</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route('admin.alternatif.store') }}">
            @csrf
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Nama Lansia :</label>
              <input type="text" class="form-control" id="nama-alternatif" name="nama_alternatif" placeholder="Nama Jurusan" required>
            </div>
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary" value="submit">Simpan</button>
        </div>
    </form>
      </div>
    </div>
  </div>

@endif



@endsection
@section('jsContent')

@endsection
