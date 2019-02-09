@extends('adminlte::page')

@section('title', 'SCGPCPT')

@section('content_header')

<h1>
    <small>Listando usuários cadastrados</small>
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
              <th>Usuários cadastrados</th>
              <th>Email</th>
              <th>ID</th>
              <th style="width: 40px">Setor</th>
            </tr>

            @php
            $i = 1;
            @endphp
        
        

            @forelse ($users as $user)
                <td><a href="">{{$i}}</a></td>            
                <td><a href="">{{ $user->name}}</a></td>
              <div>
                <td><a href="">{{ $user->email}}</a></td>
              </div>
                <td><a href="">{{ $user->id}}</a></td>
                <td><span class="badge bg-red">setor</span></td>
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

    
 

 
