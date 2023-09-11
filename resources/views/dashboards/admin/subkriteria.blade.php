@extends('layouts.adminLayout.adminLayout')
@section('cssContent')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section('content')
@if ($subkriteria->isEmpty())
    <p> Tidak Ada Sub Kriteria </p> <br>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahSubKriteria">Tambah</button>
@else
<div class="card-body">
    <h4 class="card-title">Tabel Sub Kriteria</h4>
    <p class="card-description">

    </p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahSubKriteria">Tambah</button>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Kriteria</th>
            <th>Sub Kriteria</th>
            <th>Bobot Kriteria</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($subkriteria as $subkriteria)
                <tr>
                    <td class="py-1">{{ $no++ }}</td>
                    @foreach ($kriteria as $row )
                      @if ($row->id == $subkriteria->id_kriteria)
                        <td>{{ $row->nama_kriteria }}</td>
                      @endif
                    @endforeach
                    <td>{{ $subkriteria->nama_subkriteria }}</td>
                    <td> {{ $subkriteria->bobot_subkriteria }}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editSubKriteria-{{ $subkriteria->id }}">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteSubKriteria-{{ $subkriteria->id }}">Hapus</button>
                    </td>
                </tr>

                  {{-- Form Edit Kriteria --}}

                    <div class="modal fade" id="editSubKriteria-{{ $subkriteria->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Sub Kriteria</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <form method="POST" action="{{ route('admin.sub.update', $subkriteria->id) }}">
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Nama Sub Kriteria:</label>
                                  <input type="text" class="form-control" id="nama-subkriteria" name="nama_subkriteria" placeholder="Nama Sub Kriteria" value="{{ $subkriteria->nama_subkriteria}}" required>
                                </div>
                                <div class="form-group">
                                  <label for="message-text" class="col-form-label">Bobot:</label>
                                  <select id="bobot-subkriteria" name="bobot_subkriteria" class="form-control" required>
                                    <option @if ($subkriteria->bobot_subkriteria == "50") selected @endif value="50">50</option>
                                    <option @if ($subkriteria->bobot_subkriteria == "100") selected @endif value="100">100</option>
                                  </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary" value="submit">Simpan</button>
                            </div>
                        </form>
                        </div>
                        </div>
                    </div>

                      {{-- Form Delete Kriteria --}}
                      <div class="modal modal-danger fade" id="deleteSubKriteria-{{ $subkriteria->id }}" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Hapus Kriteria</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <form action="{{ route('admin.kriteria.delete', $subkriteria->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <h5 class="text-center">Apakah Anda yakin untuk menghapus Sub Kriteria {{ $subkriteria->nama_subkriteria }}?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Ya, Hapus Sub Kriteria</button>
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


{{-- Form Tambah Kriteria --}}
<div class="modal fade" id="tambahSubKriteria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Sub Kriteria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route('admin.sub.store') }}">
            @csrf
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Nama Kriteria: </label>
              <select class="form-select" name="id_kriteria" required>
                <option selected>Pilih Nama Kriteria</option>
                @foreach ($kriteria as $kriteria)
                <option value="{{ $kriteria->id}}">{{ $kriteria->nama_kriteria}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Nama Sub Kriteria:</label>
              <input type="text" class="form-control" id="nama-subkriteria" name="nama_subkriteria" placeholder="Nama Sub Kriteria" required>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Bobot:</label>
              <select id="bobot-subkriteria" name="bobot_subkriteria" class="form-control" required>
                <option value="50">50</option>
                <option value="100">100</option>
              </select>
            </div>
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
