@extends('adminlte::page')

@section('title', 'SCGPCPT')

@section('content_header')


<h1>
    <small>Gerenciamento de tarefas</small>
  </h1>
  <ol class="breadcrumb " >
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
  </ol>

  
@stop

@section('content')

<!-- home principal -->
<!-- pagina principal home : include('pages.home') include('includes.tarefapp') -->
@include('pages.home')
    
@stop

