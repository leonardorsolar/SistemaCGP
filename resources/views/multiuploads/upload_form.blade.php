
@extends('adminlte::page')

@section('title', 'SCGPCPT')

@section('content')


@if (count($errors) > 0)

<div class="alert alert-danger">

<ul>

@foreach ($errors->all() as $error)

<li>{{ $error }}</li>

@endforeach

</ul>

</div>

@endif

<div class="container">

<div class="row">

<div class="col-md-2"><i class="fa fa-cloud-upload fa-3x" ></i></div>


<div class="col-md-8"><h2>Upload de arquivos: Manual de padronização</h2>

</div>

</div>

<br>

<div class="row">

<div class="col-md-3"></div>

<div class="col-md-6">

<form action="/multiuploads" method="post" enctype="multipart/form-data">

{{ csrf_field() }}

<div class="form-group">

<label for="Product Name">Product Name</label>

<input type="text" name="name" class="form-control"  placeholder="Product Name" >

</div>

<label for="Product Name">Product photos (can attach more than one):</label>

<br />

<input type="file" class="form-control" name="photos[]" multiple />

<br /><br />

<input type="submit" class="btn btn-primary" value="Upload" />

</form>

</div>

</div>

</div>


@endsection