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

<!-- listando todos so curso cadastrados com seu status -->

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


<!-- listando com filtros -->
  <div class="box">
      <div class="box-body ">
    
          <!-- general form elements  -->
            
                  
                      <div class="row">
                          
                          <div class="form-row">
                          
  
                              <!-- selecionar tipo de projeto -->
                              <div class="form-group col-md-3">
  
                                  <label for="exampleFormControlSelect1">Categoria de Projeto</label>
                                  <select id="typeProject" name="typeProject" class="form-control form-control-sm">
  
                                      <option value="">Selecione uma opção</option>
  
                                      @foreach($type_projects as $type)
                                          <option value="{{$type->id}}">{{$type->name}}</option>
                                      @endforeach
  
  
  
                                  </select>
                              </div>
  
                              <!-- selecionar área de projeto -->
                              <div class="form-group col-md-3">
  
                                  <label for="exampleFormControlSelect1">Área</label>
                                  <select name="area" id="area" class="form-control form-control-sm" >
                                      <option value="">Selecione uma opção</option>
                                  </select>
                              </div>
  
                              <!-- selecionar curso/aula-->
                              <div class="form-group col-md-3">
                                  <label for="projeto">Curso/Aula</label>
                                  <select name="projeto" id="projeto" class="form-control form-control-sm" >
                                      <option value="">Selecione uma opção</option>
                                      
                                  </select>
                        
                              </div>

                               <!-- selecionar setores -->
                               <div class="form-group col-md-3">
                                  <label for="exampleFormControlSelect1">Setor</label>
                                  <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                                      @foreach($sectories as $sector)
                                          <option>{{$sector->name}}</option>
                                      @endforeach
  
                                  </select>
                              </div>
  
                          </div>
  
          
                  </div>
                  <div class="row"> 
                      <div class="col-md-3">
                                    <!-- Date -->
                          
                           <label>Previsão de início:</label>
                          
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker">
                          </div>
                      </div>
                      <div class="col-md-3">
                                    <!-- Date -->
                                    
                                  <label>Previsão de término:</label>
                                  
                                  <div class="input-group date">
                                    <div class="input-group-addon">
                                      <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="datepicker">
                                  </div>
                      </div>
                      <div class="col-md-3">
                              <label for="projeto">Status</label>
                              <select name="projeto" class="form-control form-control-sm" id="projeto">
                                  <option value="">A iniciar</option>
                                  <option value="">Progresso</option>
                                      <option value="">Parado</option>
                                      <option value="">Finalizado</option>
                          </select>

                      </div>
                      <div class="col-md-3">
                          <label for="projeto">diretor</label>
                          <select name="projeto" class="form-control form-control-sm" id="projeto">
                                  <option value="">Guiga</option>
                                  <option value="">Isaac</option>
                                  <option value="">Fernanda</option>
                          </select>

                  </div>      
                     
                      
                  </div>
      


                          <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-condensed">
              <tr>
                <th style="width: 10px">#</th>
                <th>Tipo de projeto</th>
                <th>area</th>
                <th>Aulas/Cursos cadastrados</th>
                <th>Situação</th>
                <th>Progress</th>
                <th style="width: 40px">Label</th>
                <th>Fase do Projeto(setor)</th>
                <th>detalhes</th>
              </tr>
                        
              
              @forelse ($projects as $project)
              <tr>
                
                <td>{{ $project->id}}</td>
                <td>{{$type->name}}</td>
                <td>Area</td>
                <td><a href="{{ $project->path()}}">{{ $project->name}}</a></td>
                <td>situação</td>
                <td>
                  <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                  </div>
                </td>
                <td><span class="badge bg-red">55%</span></td> 
                <td>cinegrafia</td>
                <td><a href="{{ $project->path()}}/status"><i class="fa fa-arrow-right"></i></a></td>
              </tr>
             
             
              @empty
              <li>No projects yet.</li>
              @endforelse
            </table>
          </div>
  </div>  
</div><!-- /.box final do bloco -->


@endsection

@section('js')
    <script> 
     $('#typeProject').on('change', function(e){

        document.getElementById("area").innerHTML = "";
        $('#area').append(new Option("Selecione uma opçao", "a"));

        var typeProject_id = e.target.value;
        $.ajax({
        'processing': true, 
        'serverSide': false,
          type: "GET",
          url: "/typeprojects/"+typeProject_id+"/areas",
          success: function(s) {
            $.each(s, function(index,area){
                var option = new Option(area.name,area.id);
                $('#area').append(option);
            });
          }
      });
    });

    $('#area').on('change', function(e){

        console.log(`teste`);
       document.getElementById("projeto").innerHTML = "";
       $('#projeto').append(new Option("Selecione uma opçao", "a"));

       var areaProject_id = e.target.value;
       $.ajax({
       'processing': true,
       'serverSide': false,
         type: "GET",
         url: "/areaprojects/"+areaProject_id+"/projects",
         success: function(s) {
           $.each(s, function(index,projeto){
               var option = new Option(projeto.name,projeto.id);
               $('#projeto').append(option);
           });
         }
     });
   });
    </script>
@stop
