@extends('layouts.master')

@section('content')
<form action= "/item" method= "POST">
    @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control" placeholder="Enter description" id="desccription" name="description">
        </div>
        <div class="form-group ">
          <label for="stock">Stock</label>
            <input type="text" class="form-control" placeholder="Enter Stock" name="stock" id="stock">
        </div>
        <div class="form-group ">
          <label for="price">Price</label>
            <input type="text" class="form-control" placeholder="Enter Price" name="price" id="price">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>  
@endsection