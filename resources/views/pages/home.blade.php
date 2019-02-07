
    
    
    <!-- Main content -->
    

      <!--------------------------
        | Your Page Content Here |
        -------------------------->


<!-- Info boxes -->
  <div class="row " >

        <div class="col-md-2 col-sm-6 col-xs-12">
            <span class=""><i class="ion ion-ios-gear-outline"></i></span>
              <span class="">Progresso:</span>
              <span class="">60<small>%</small></span>

               <div class="progress progress-xs">
                <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                  <span class="sr-only">60% Complete (warning)</span>
                </div>
              </div>
        
      
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

       <div class="col-md-2 col-sm-6 col-xs-12">
            <span class=""><i class="ion ion-ios-gear-outline"></i></span>
              <span class="">Quantidade de tarefas semanais:</span>
              <span class="">10</span>
      
          <!-- /.info-box -->
        </div>
              
       <div class="col-md-2 col-sm-6 col-xs-12">
            <span class=""><i class="ion ion-ios-gear-outline"></i></span>
              <span class="">Quantidade de tarefas completas:</span>
              <span class="">6</span>
      
          <!-- /.info-box -->
        </div>

<!-- botao de tarefas -->
<div class="col-md-2 col-sm-6 col-xs-12 ">
    <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#modal-default"><i class="fa fa-th-list"></i> Adicionar Tarefas
    </button>
  <!-- /.col -->
</div>

 <!-- botao de tarefas -->
<div class="col-md-3 col-sm-6 col-xs-12 ">
    
  <!-- /.col -->
</div>      
      
        <!-- /.col -->
  </div>
      <!-- /.row -->


    <span>  </span>

          <!-- Main content -->


           

      

<!-- bloco esquerdo - tarefas-->
          <div class="">
              <div class="row">
<!-- tarefas -->
                <div class="col-sm-8  ">
                  
                  
 <!-- TO DO List -->
          <div class="box">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Lista de Tarefas</h3>


              <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">04/02/19</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body">

              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              
              <ul class="todo-list">

               

              <!-- tarefa -->
              @include('includes.tarefapp')
            <!-- FIM tarefa -->





              </ul>
            </div>
<!-- FIM box-header -->
        </div>
<!-- FIM TO DO List -->                            
                </div>

<!-- bloco direito --> 

 <!-- blocos minhas metas -->
                <div class="col-sm-4">

                    <div class="box box-danger">

                        <div class="box-header with-border">
                          <i class="fa fa-user"></i>
                          <h3 class="box-title">OKR</h3>


                          <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <div class="btn-group">
                              <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-wrench"></i></button>
                              <ul class="dropdown-menu" role="menu">
                                  <li><a href="okr">Visualizar</a></li>
                                <li><a href="#">Editar</a></li>
                              </ul>
                            </div>
                            
                          </div>




                        </div>
            
                        <!-- /.box-header metas -->
                        <div class="box-body">
                          <!-- /.progress-group -->
                          <div class="progress-group">
                            <span class="progress-text">KR1</span>
                            <span class="progress-number"><b>5</b>/20</span>
        
                            <div class="progress sm">
                              <div class="progress-bar progress-bar-aqua" style="width: 25%"></div>
                            </div>
                          </div>
                          <!-- /.progress-group -->
                          <div class="progress-group">
                            <span class="progress-text">KR1</span>
                            <span class="progress-number"><b>20</b>/40</span>
        
                            <div class="progress sm">
                              <div class="progress-bar progress-bar-aqua" style="width: 50%"></div>
                            </div>
                          </div>


                       </div>
                          <!-- /.box-body -->
            
            
                      </div>
                      <!-- /.box box-danger -->
 <!-- bloco de notas -->

            <div class="box box-danger">

                <div class="box-header with-border">
                  <i class="fa fa-edit"></i>
                  <h3 class="box-title">Bloco de notas</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <div class="btn-group">
                      <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-wrench"></i></button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Editar</a></li>
                      </ul>
                    </div>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>

                <!-- /.box-header bloco de notas -->
                <div class="box-body">
                  <div class="row">
                    
                      <div class="box-body">

                <!-- textarea -->
                <div class="form-group">
                  <textarea class="form-control" rows="3" placeholder="Digite aqui"></textarea>
                </div>
                  
                  </div>

              

                      <!-- /.progress-group -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
              </div>
              <!-- /.box -->


  </div>  <!-- d=fim do col-sm-4 -->


  </div> <!-- fim do row tarefas -->


              <div class="row">
                <div class="col-sm">col-sm</div>
                <div class="col-sm">col-sm</div>
                <div class="col-sm">col-sm</div>
              </div>
            </div>


          

<!-- modal -->
@include('includes.modal')




        <!--------------------------
        | Your Page Content Here |
        -------------------------->


        