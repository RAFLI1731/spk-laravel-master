@extends('layouts.adminLayout.adminLayout')
@section('cssContent')

@endsection
@section('content')
@if ($alternatif->isEmpty())
    <p> Tidak Ada Data Lansia </p> <br>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahAlternatif">Tambah</button>
@else
<div class="card-body">
    <h4 class="card-title">Tabel Data Lansia</h4>
    <p class="card-description">

    </p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahAlternatif">Tambah</button>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($alternatif as $alternatif)
                <tr>
                    <td class="py-1">{{ $no++ }}</td>
                    <td>{{ $alternatif->nama_alternatif }}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editalternatif-{{ $alternatif->id }}">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletealternatif-{{ $alternatif->id }}">Hapus</button>
                    </td>
                </tr>

                  {{-- Form Edit alternatif --}}

                    <div class="modal fade" id="editalternatif-{{ $alternatif->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Lansia</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <form method="POST" action="{{ route('admin.alternatif.update', $alternatif->id) }}">
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <div class="form-group">
                                    <label for="nama-alternatif" class="col-form-label">Nama Lansia:</label>
                                    <input type="text" class="form-control" id="nama-alternatif" name="nama_alternatif" placeholder="Nama Lansia" value="{{ $alternatif->nama_alternatif }}" required>
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

                      {{-- Form Delete alternatif --}}
                      <div class="modal modal-danger fade" id="deletealternatif-{{ $alternatif->id }}" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Hapus alternatif</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <form action="{{ route('admin.alternatif.delete', $alternatif->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <h5 class="text-center">Apakah Anda yakin untuk menghapus nama lansia <b>{{ $alternatif->nama_alternatif }}</b> ?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Ya, Hapus Data Lansia</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

            @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endif
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
              <input type="text" class="form-control" id="nama-alternatif" name="nama_alternatif" placeholder="Nama Lansia" required>
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

@endsection
@section('jsContent')

@endsection
