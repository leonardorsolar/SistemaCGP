
@extends('adminlte::page')

@section('title', 'SCGPCPT')

@section('content_header')

<div class="row">
    <div class="col-sm-6">
<h3 class="">{{ $project->name }}</h3>
</div>
<div class="col-sm-6 pull-rigth">
        <button type="button" onclick="window.location.href='{{ $project->path() . '/edit' }}'" class="btn btn-success pull-right" ><i class="fa fa-edit"></i> Editar Projeto
        </button>
      <!-- /.col -->
    </div>
</div>

@stop

@section('content')
    

<div class="box">
<div class="box-body">
@include('includes.tarefa')
</div>
</div> 
@stop







