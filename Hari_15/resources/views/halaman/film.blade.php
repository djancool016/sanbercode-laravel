@extends('layout.master')
@section('judul')
Dashboard
@endsection
@section('content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#storeModal">
Tambah Film
</button>

<!-- Store Modal -->
<div class="modal fade" id="storeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Film</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/film/store" method="post">
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Judul</span>
                </div>
                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" required="required" name="judul">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Tahun</span>
                </div>
                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" required="required" name="tahun">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Genre</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="genre">
                    <option selected>Choose...</option>
                    @foreach($genre as $g)
                    <option value="{{ $g->id }}">{{ $g->nama }}</option>
                    @endforeach  
                </select>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Sinopsis</span>
                </div>
                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" required="required" name="ringkasan">
            </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Upload Poster</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="poster">
            </div>
            <input type="submit" class="btn btn-primary" value="Simpan Data">
        </form>
      </div>
    </div>
  </div>
</div>

<!-- CARD DAFTAR FILM -->
<div class="row pt-4">
    @foreach($film as $f)
    <div class="col-3">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3 class="card-title text-bold">{{ $f->judul }}</h3>
                    <div>
                        <a href="/film/edit/{{{ $f->id }}}" class="btn btn-sm" role="button"><i class="fas fa-edit"></i></a>
                        <a href="/film/destroy/{{{ $f->id }}}" class="btn btn-sm" role="button" onclick="return confirm('Hapus Data?')"><i class="fas fa-trash"></i></a>
                    </div>
                </div>              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <img class="card-img-top" src="{{ asset('poster')}}/{{ $f->poster }}" alt="Image" />
                <p>Genre : {{ $f->genre }}</p>
                <p>Tahun : {{ $f->tahun }}</p>
                <p>Sinopsis : {{ $f->ringkasan }}</p>
            </div>
        </div>
    </div>
    @endforeach  
</div>

@endsection

