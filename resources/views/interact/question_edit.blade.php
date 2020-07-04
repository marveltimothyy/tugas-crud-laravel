@extends('layouts.master')

@section('content')
@foreach ($data as $key => $item)
    
<form action= "/pertanyaan/{{$item->id}}" method= "POST">
  @method('PUT')
  @csrf
  <div class="form-group">
    <label for="judul">Judul</label>
  <input type="text" class="form-control" value="{{$item->judul}}"  id="judul" name="judul">
  </div>
  <div class="form-group">
    <label for="isi">Isi</label>
    <input type="text" class="form-control" value="{{$item->isi}}" id="isi" name="isi">
    @if (count($errors) > 0)
    <span class="badge badge-pill badge-danger"> 
      Max 255 Character for each Judul and Isi
    </span>
    @endif
  </div>
  <input class="text" id="question_id" name="question_id" value="{{$item->id}}" hidden>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>  
@endforeach
@endsection