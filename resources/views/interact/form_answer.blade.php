@extends('layouts.master')

@section('content')
@foreach($data2 as $key2 => $item2)
<div>
    <span class="badge badge-pill badge-primary">Question</span>
    <a href="/jawaban/{{$item2->id}}" class="badge badge-pill badge-warning">Answer This Question</a> 
</div>
<h1>{{$item2->judul}}</h1>
<h4>{{$item2->isi}}</h4>
<hr>
<form action= "/jawaban/{{$item->id}}" method= "POST">
    @csrf
        <div class="form-group">
          <label for="isi">Jawaban</label>
          <input type="text" class="form-control" size="4" placeholder="Judul" id="isi" name="isi">
          @if (count($errors) > 0)
      <span class="badge badge-pill badge-danger"> 
          Max 255 Character for each Judul and Isi
      </span>
    @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>  
@endsection