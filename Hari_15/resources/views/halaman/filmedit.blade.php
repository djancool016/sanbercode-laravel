@extends('layout.master')
@section('judul')
Dashboard
@endsection
@section('content')


@foreach($film_edit as $fe)
<form action="/film/store" method="post">
      @csrf
      <input type="hidden" value="{{ $fe->id }}" name="id">
      <div class="input-group mb-3">
          <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Judul</span>
          </div>
          <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" required="required" name="judul" value='{{ $fe->judul }}'>
      </div>
      <div class="input-group mb-3">
          <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Tahun</span>
          </div>
          <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" required="required" name="tahun" value="{{ $fe->tahun }}">
      </div>
      <div class="input-group mb-3">
          <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Genre</label>
          </div>
          <select class="custom-select" id="inputGroupSelect01" name="genre" select="{{ $fe->genre_id }}">
              <option selected>Choose...</option>
              @foreach($genre as $g)
              <option value="{{ $g->id }}">{{ $g->nama }}</option>
              @endforeach  
          </select>
      </div>
      <div class="input-group mb-3">
          <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Sinopsis</span>
          </div>
          <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" required="required" name="ringkasan" value="{{ $fe->ringkasan }}">
      </div>
      </div>
      <div class="form-group">
          <label for="exampleFormControlFile1">Upload Poster</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="poster" value="{{ $fe->poster }}">
      </div>
      <input type="submit" class="btn btn-primary" value="Simpan Data">
  </form>
  @endforeach


@endsection