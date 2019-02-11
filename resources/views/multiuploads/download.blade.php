@extends('adminlte::page')

@section('title', 'SCGPCPT')

@section('content_header')





  
  <small>Download</small>
</h1>
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li><a href="#">Examples</a></li>
  <li class="active">Blank page</li>
</ol>

  
@stop

@section('content')

<div class="box">
  <div class="box-header">
    <h3 class="box-title">Lista</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body no-padding">
    <table class="table table-condensed">
      <tr>
        <th style="width: 10px">#</th>
        <th>Manual de padronização</th>
        <th style="width: 40px">Deletar</th>
      </tr>

      @php
      $i = 1;
      @endphp
  
  @forelse ($items as $item)
          <td><a href="">{{$i}}</a></td>            
          <td><a href="download/{{$item->id}}">{{$item->name}}</a></td>
       
          <td><a href="delete/{{$item->id}}"><i class="fa fa-fw fa-trash-o"></i></a></td>
          
          
          </tr>
          @php
          $i++;
          @endphp
      @empty
      <li>No projects yet.</li>
      @endforelse

    </table>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
</div>
   

@stop

    
 

 
