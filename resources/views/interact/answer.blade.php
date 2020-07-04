@extends('layouts.master')

@section('content')
@foreach($data2 as $key2 => $item2)
<div>
    <span class="badge badge-pill badge-primary">Question</span>
    <span class="badge badge-pill badge-secondary">Create at : {{$item2->created_at}} </span>
    <span class="badge badge-pill badge-success">Update at : {{$item2->updated_at}}</span>
</div>
<h1>{{$item2->judul}}</h1>
<h4>{{$item2->isi}}</h4>
<hr>
@endforeach
@foreach($data as $key => $item)
<span class="badge badge-pill badge-info">Answer</span>
<span class="badge badge-pill badge-secondary">Create at : {{$item->created_at}} </span>
<span class="badge badge-pill badge-success">Update at : {{$item->updated_at}}</span>
<h1>{{$item->isi}}</h1>
<hr>
@endforeach
<span class="badge badge-pill badge-warning">Answer This Question</span> 
<br>
<br>
@foreach($data2 as $key2 => $item2)
<form action= "/jawaban/{{$item2->id}}" method= "POST">
    @csrf
        <div class="form-group">
          <textarea class="form-control" rows="4" cols="50" placeholder="Your answer" id="isi" name="isi"></textarea>
          @if (count($errors) > 0)
          <span class="badge badge-pill badge-danger"> 
              Max 255 Character for each Judul and Isi
          </span>
        @endif
        </div>
        <input class="text" id="question_id" name="question_id" value="{{$item2->id}}" hidden>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>  
@endforeach
{{-- <table class="table">
    <thead>
      <tr>
        @foreach($data2 as $key2 => $item2)
        <th>Judul </th>{{$item2->judul}}
        <th>Isi</th>{{$item2->isi}}
        @endforeach
      </tr>
    </thead>
    <tbody>
    @foreach($data as $key => $item)
      <tr>
      <td>{{$item->isi}}</td>
      <td>{{$item->question_id}}</td>
      <form action="/jawaban/{{$item->id}}" method="POST">
        @csrf
        <td>
          <input name = "id" value="{{$item->id}}" hidden>
        </td>
    </form>
</tr> 
@endforeach
@foreach($data2 as $key2 => $item2)
        <a href="/jawaban/{{$item2->id}}" class="btn btn-primary">Answer</a> 
        @endforeach
    </tbody>
  </table> --}}
@endsection 