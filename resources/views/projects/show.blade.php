
@extends('adminlte::page')

@section('title', 'SCGPCPT')

@section('content_header')

<h1>{{ $project->name }}</h1>

@stop

@section('content')
    

<div class="box">
<div class="box-body">
@include('includes.tarefa')
</div>
</div> 
@stop







