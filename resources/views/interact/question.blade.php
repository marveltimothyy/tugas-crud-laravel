@extends('layouts.master')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th>Judul</th>
        <th>Isi</th>
        <th>Dibuat</th>
        <th>Diperbaharui</th>
        <th>
          <a href="/pertanyaan/create" class="btn btn-success">Add New Question</a> 
        </th>
      </tr>
    </thead>
    <tbody>
    @foreach($items as $key => $item)
      <tr>
      <td>{{$item->judul}}</td>
      <td>{{$item->isi}}</td>
      <td>{{$item->created_at}}</td>
      <td>{{$item->updated_at}}</td>
      
      <form action="/jawaban/{{$item->id}}" method="POST">
        @csrf
        <td>
          <input name = "id" value="{{$item->id}}" hidden>
          <a href="/jawaban/{{$item->id}}" class="btn btn-primary">Answer</a> 
        </td>
      </form>
    </tr> 
    @endforeach
    </tbody>
  </table>
@endsection 