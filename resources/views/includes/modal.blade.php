@foreach($projects as $project)
<option value="{{$project->id}}">{{$project->name}}</option>
 @endforeach


    <!-- Modal Adicionar tarefas-->
    <div class="modal fade bd-example-modal-lg small lh-125" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- titulo -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Adicionar Nova Tarefa</h5>
                   
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <!-- corpo -->
                <div class="modal-body">

            
                        <div class="form-row">
                            <!-- selecionar setores -->
                            <div class="form-group col-md-3">
                                <label for="exampleFormControlSelect1">Setor</label>
                                <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                                    @foreach($sectories as $sector)
                                        <option>{{$sector->name}}</option>
                                    @endforeach

                                </select>
                            </div>

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

                        </div>

                
                <?php
                
                
               // $valor = $_POST['projeto'];
                
                ?>
                

                    <div class="form-group">



                        <label for="recipient-name" class="col-form-label">Adicionar Tarefa:</label>
                        {{$project->id}}{{$project->name}}
                        <br>
                        {{$project->path()}}

                        
                        <!-- metodo post -->
                        <form action="{{$project->path() . '/tasks'}}" method="POST">
                                @csrf

                                
                        <div class="input-group">
                                
                            <input type="text-dark" class="form-control" name="body"  placeholder="Adicionar uma nova tarefa">
                            <span class="input-group-addon"><i class="fa fa-refresh"></i></span>
                                            
                                
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
                                                <option value="">Progresso</option>
                                                <option value="">Parado</option>
                                                <option value="">Análise</option>
                                                <option value="">Finalizado</option>
                                        </select>


                                </div>
                
                                 <div class="col-md-3">
                
                                    <!-- /.input group -->
                                    <div class="modal-footer ">
                                            <button type="submit"  id="modal-default" class="btn btn-primary">Adicionar</button>
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Salvar mudanças</button>
                                        
                                 </div>    
                                
                            </div>

                        </form>

                    </div>
                         
            
        </div>
    </div>
</div>
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
        <!-- Calendário boostrap 4 https://investmentnovel.com/how-to-use-bootstrap-datepicker-in-laravel/ -->
        


    