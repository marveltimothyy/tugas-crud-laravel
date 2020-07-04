@extends('layouts.master')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th>Judul</th>
        <th>Isi</th>
        <th>Dibuat</th>
        <th>Diperbaharui</th>
      </tr>
    </thead>
    <tbody>
    @foreach($data2 as $key2 => $item2)
      <tr>
      <td>{{$item2->judul}}</td>
      <td>{{$item2->isi}}</td>
      <td>{{$item2->created_at}}</td>
      <td>{{$item2->updated_at}}</td>
      {{-- <form action="/jawaban/{{$item2->id}}/edit" method="POST">
        @csrf --}}
        <td>
          {{-- <input name = "id" value="{{$item2->id}}" hidden> --}}
          <a href="/pertanyaan/{{$item2->id}}/edit" class="btn btn-primary">Edit</a> 
          <form action= "/pertanyaan/{{$item2->id}}" method= "POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      {{-- </form> --}}
    </tr> 
    @endforeach
    </tbody>
  </table>
  @foreach($data as $key => $item)
  <span class="badge badge-pill badge-info">Answer</span>
  <span class="badge badge-pill badge-secondary">Create at : {{$item->created_at}} </span>
  <span class="badge badge-pill badge-success">Update at : {{$item->updated_at}}</span>
  <h1>{{$item->isi}}</h1>
  <hr>
  @endforeach
@endsection 