@extends('layouts.master')

@section('content')
<form action= "/pertanyaan" method= "POST">
    @csrf
    <div class="form-group">
      <label for="judul">Judul</label>
      <input type="text" class="form-control"  id="judul" name="judul">
    </div>
    <div class="form-group">
      <label for="isi">Isi</label>
      <input type="text" class="form-control"  id="isi" name="isi">
      @if (count($errors) > 0)
      <span class="badge badge-pill badge-danger"> 
          Max 255 Character for each Judul and Isi
      </span>
    @endif
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>  
  @endsection