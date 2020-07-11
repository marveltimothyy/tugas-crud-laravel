@extends('layouts.master')
@section('content')
<div class="ml-3 mt-3">
<form action="/categories" method="POST">
    @csrf
<div class="form-gorup">
    <label for="name">Category Name</label>
    <input class="form-control" type="text" name="name" placeholder="Isi nama Kategori" >
    <input class="btn btn-primary mt-2" type="submit" value="Create Category">
</div>
</form>
</div>
@endsection