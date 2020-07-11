@extends('layouts.master')
@section('content')
<div class="ml-3 mt-3">
    <a href="/categories/create" class="btn btn-primary mb-2">Create New</a>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th></th>

            </tr>


        </thead>
        <tbody>
@foreach ($categories as $key => $category )
    
<tr>
    <td>{{$key + 1}}</td>
    <td>{{$category->name}}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection