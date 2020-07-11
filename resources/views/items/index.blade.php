@extends('layouts.master')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Description</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Category</th>
      </tr>
    </thead>
    <tbody>
    @foreach($items as $key => $item)
      <tr>
      <td>{{$key + 1}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->description}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->stock}}</td>
        @foreach ($category as $items => $value)
            
        @if ($item->category_id == $value->id)
        <td>{{$value->name}}</td>
        @endif
        @endforeach
    </tr> 
    @endforeach
    </tbody>
  </table>
@endsection 