@extends('layouts.master')

@section('content')
<form action= "/item/update" method= "POST">
  @csrf
  {{-- @method('put') --}}
    @foreach($data as $key => $value)
        <div class="form-group">
          <label for="name">Name</label>
        <input type="text" class="form-control" value="{{$value->name}}" id="name" name="name">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control" value="{{$value->description}}" id="desccription" name="description">
        </div>
        <div class="form-group ">
          <label for="stock">Stock</label>
            <input type="text" class="form-control" value="{{$value->stock}}" name="stock" id="stock">
        </div>
        <div class="form-group ">
          <label for="price">Price</label>
          <input type="text" class="form-control" value="{{$value->price}}" name="price" id="price">
        </div>
        {{-- <div class="form-group ">
        <label for="id">Id</label> --}}
        <input type="text" class="form-control" value="{{$value->id}}" name="id" id="id" hidden>
        {{-- <div> --}}
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>  
      @endforeach
@endsection