@extends('adminlte::page')

@section('title', 'SCGPCPT')

@section('content_header')

<h1>
    <small>Listando as aulas/cursos cadastrados</small>
  </h1>
  <ol class="breadcrumb " >
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
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
              <th>Aulas/Cursos cadastrados</th>
              <th>status</th>
              <th>Progress</th>
              <th style="width: 40px">Label</th>
            </tr>

            @forelse ($projects as $project)
            <tr>
              <td>{{ $project->id}}</td>
              <td><a href="{{ $project->path()}}">{{ $project->name}}</a></td>
              <div>
                <td><a href="{{ $project->path()}}/status">{{ $project->name}}</a></td>
              </div>
              
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                </div>
              </td>
              <td><span class="badge bg-red">55%</span></td>
            </tr>
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

    
 

 
