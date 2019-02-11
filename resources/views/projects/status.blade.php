@extends('adminlte::page')

@section('title', 'SCGPCPT')

@section('content_header')

<h1>{{$project->name}} </h1>


@php
      $i = 0;
@endphp

@foreach ($total as $item)
{{$item->project_id}}

@php
$i++;
@endphp
@endforeach
<br>
<td><a href="">{{$i}}</a></td> 


</h1>
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li><a href="#">Examples</a></li>
  <li class="active">Blank page</li>
</ol>

  
@stop

@section('content')



  <!-- Default box -->
<div class="box">
 <div class="box-header">
          <h3 class="box-title">Status do Projeto</h3>

   <div class="progress ">
    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"> 50%</div>
  </div> 
  
  
<!-- linha tarefas -->
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-3 col-sm-3">
            <div class="panel-data">
              <!-- Default box -->
                                <h3 class="panel-hero-title"><i class="fa fa-tasks"></i> <span class="count color-danger">{{$i}}</span></h3>
              <span>Tarefas</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3">
            <div class="panel-data">
              <h3 class="panel-hero-title"><i class="fa fa-check-square-o"></i> <span class="count color-danger">?</span></h3>
              <span>Completas</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3">
            <div class="panel-data">
              <h3 class="panel-hero-title"><i class="fa fa-square-o"></i> <span class="count color-danger">?</span></h3> 
              <span>Incompletas</span>
            </div>
          </div>
        </div>
      </div>
                   
  </div>

        <!-- /.box-header -->
  <div class="box-body no-padding">
          <table class="table table-condensed">

              <tr>
                  <td></td>
                  <td>Abertura do Projeto</td>
                  <td>
                      <div class="col-md-4">
                                    
                          <!-- Date -->
                          
                          
                          
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker">
                          </div>
                      </div>
                    
                  </td>
                  <td></td>
                </tr> 

            <tr>
              <th style="width: 10px">#</th>
              <th>Atividades</th>
              <th>Progresso</th>
              <th style="width: 40px">Label</th>
            </tr>
                       
            <tr>
              <td>1.</td>
              <td>Cinegrafia</td>
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                </div>
              </td>
              <td><span class="badge bg-red">55%</span></td>
            </tr>
            <tr>
              <td>2.</td>
              <td>Computação Gráfica</td>
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                </div>
              </td>
              <td><span class="badge bg-yellow">70%</span></td>
            </tr>
            <tr>
              <td>3.</td>
              <td>Edição</td>
              <td>
                <div class="progress progress-xs progress-striped active">
                  <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                </div>
              </td>
              <td><span class="badge bg-light-blue">30%</span></td>
            </tr>
            <tr>
              <td>4.</td>
              <td>Controle de qualidade</td>
              <td>
                <div class="progress progress-xs progress-striped active">
                  <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                </div>
              </td>
              <td><span class="badge bg-green">90%</span></td>
            </tr>

            <tr>
                <td></td>
                <td>Entrega - Data de término:</td>
                <td>
                    <div class="col-md-4">
                                  
                        <!-- Date -->
                                         
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right" id="datepicker">
                        </div>
                    </div>
                  
                </td>
                <td></td>
              </tr> 

          </table>
      </div>
        <!-- /.box-body -->

       
</div>
      <!-- /.box -->
  <!-- /.box -->




  <!-- linha do tempo-->
<!-- row -->
  <div class="row">
    <div class="col-md-12">

      <!-- The time line -->
      <ul class="timeline">
        <!-- timeline time label -->
        <li class="time-label">
              <span class="bg-blue">
                10 Feb. 2014
              </span>
        </li>
        <!-- /.timeline-label -->
        <!-- timeline item -->
        <li>
          <i class="fa fa-video-camera bg-blue"></i>

          <div class="timeline-item">
            <span class="time"><i class="fa fa-video-camera"></i> 2 FEV</span>

            <h3 class="timeline-header"><a href="#">Cinegrafia</a> </h3>

            <div class="timeline-body">
              Gravação da aula completa
            </div>
            <div class="timeline-footer">
              <a class="btn btn-primary btn-xs">Editar</a>
              <a class="btn btn-danger btn-xs">Delete</a>
            </div>
          </div>
        </li>
        <!-- END timeline item -->
        


        <!-- timeline time label -->
        <li class="time-label">
              <span class="bg-red">
                2 Mar. 2019
              </span>
        </li>
        <!-- /.timeline-label -->
        <!-- timeline item -->
        <li>
          <i class="fa fa-cubes bg-red"></i>

          <div class="timeline-item">
            <span class="time"><i class="fa fa-cubes"></i> 2 FEV</span>

            <h3 class="timeline-header"><a href="#">Computação Gáfica</a> </h3>

            <div class="timeline-body">
              34 cgs completas
            </div>
            <div class="timeline-footer">
              <a class="btn btn-primary btn-xs">Editar</a>
              <a class="btn btn-danger btn-xs">Delete</a>
            </div>
          </div>
        </li>
        <!-- END timeline item -->

        <!-- timeline time label -->
        <li class="time-label">
            <span class="bg-orange">
              2 Mar. 2019
            </span>
      </li>
      <!-- /.timeline-label -->
      <!-- timeline item -->
      <li>
        <i class="fa  fa-file-video-o bg-orange"></i>

        <div class="timeline-item">
          <span class="time"><i class="fa fa-cubes"></i> 2 FEV</span>

          <h3 class="timeline-header"><a href="#">Edição</a> </h3>

          <div class="timeline-body">
            34 cgs completas
          </div>
          <div class="timeline-footer">
            <a class="btn btn-primary btn-xs">Editar</a>
            <a class="btn btn-danger btn-xs">Delete</a>
          </div>
        </div>
      </li>
      <!-- END timeline item -->


      <!-- timeline time label -->
      <li class="time-label">
          <span class="bg-green">
            2 Mar. 2019
          </span>
    </li>
    <!-- /.timeline-label -->
    <!-- timeline item -->
    <li>
      <i class="fa fa-cubes bg-green"></i>

      <div class="timeline-item">
        <span class="time"><i class="fa fa-cubes"></i> 2 FEV</span>

        <h3 class="timeline-header"><a href="#">Controle de Qualidade</a></h3>

        <div class="timeline-body">
          34 cgs completas
        </div>
        <div class="timeline-footer">
          <a class="btn btn-primary btn-xs">Editar</a>
          <a class="btn btn-danger btn-xs">Delete</a>
        </div>
      </div>
    </li>
    <!-- END timeline item -->



        <li>
          <i class="fa fa-clock-o bg-gray"></i>
        </li>
      </ul>
    </div>
    <!-- /.col -->
  </div>
<!-- /.row -->

  

  <!-- /.fim linha do tempo -->


<!-- Main content -->
<section class="invoice">
  <!-- title row -->
  <div class="row">
    <div class="col-xs-12">
      <h2 class="page-header">
        <i class="fa fa-globe"></i> Aula 01 - Boca
        <small class="pull-right">Date: 2/10/2014</small>
      </h2>
    </div>
    <!-- /.col -->
  </div>
  <!-- info row -->

<div class="row">
    <!-- accepted payments column -->
    <div class="col-xs-6">
      
<form class="form-horizontal">
  <div class="box-body">

            <div class="form-group">
              <label for="input" class="col-sm-2 control-label">Tipo de Projeto</label>

              <div class="col-sm-10">
                <input type="" class="form-control" id="input" placeholder="Tipo de projeto">
              </div>
            </div>


            <div class="form-group">
              <label for="input" class="col-sm-2 control-label">Área do projeto</label>

              <div class="col-sm-10">
                <input type="" class="form-control" id="input" placeholder="Área do projeto">
              </div>
            </div>

            <div class="form-group">
              <label for="input" class="col-sm-2 control-label">Diretor</label>

              <div class="col-sm-10">
                <input type="" class="form-control" id="input" placeholder="Responsável">
              </div>
            </div>


            <div class="form-group">
              <label>Meta</label>
              <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
            </div>


            <div class="form-group">
              <label>Gerenciamento de Erros:</label>
              <textarea class="form-control" rows="3" placeholder="O que deu de errado?"></textarea>
            </div>

            <div class="form-group">
                <label>Relatório de acertos:</label>
                <textarea class="form-control" rows="3" placeholder="O que foi bom?"></textarea>
              </div>

              <div class="form-group">
                  <label>Sugestões de melhoria:</label>
                  <textarea class="form-control" rows="3" placeholder="O que pode ser melhorado?"></textarea>
                </div>

      </div>
</div>
</form>

    <!-- /.col -->

    <div class="col-xs-6">
      <p class="lead">Relatório</p>

      <div class="table-responsive">
        <table class="table">
          <tr>
            <th>Escopo</th>
            <td>%Previsto </td>
            <td>% Realizado</td>
          </tr>
          <tr>
            <th>Tempo</th>
            
          </tr>
        </table>

        <!-- linha tempo inicio termino-->
  <div class="row">
      <div class="col-md-12">
        <div class="col-md-3 col-sm-3">
          <div class="panel-data">
              <span>Data Início</span>
            <!-- Default box -->
            <h5 class="panel-hero-title"><i class="fa  fa-calendar-plus-o"></i> <span class="count color-danger">01/02/2019</span></h5>
            
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="panel-data">
              <span>Data Término</span>
            <h5 class="panel-hero-title"><i class="fa fa-calendar-check-o"></i> <span class="count color-danger">01/06/2019</span></h5>
            
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="panel-data">
              <span>Duração</span>
            <h5 class="panel-hero-title"><i class="fa fa-square-o"></i> <span class="count color-danger">3 meses</span></h5> 
            
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="panel-data">
                <span>Base Line</span>
              <h5 class="panel-hero-title"><i class="fa fa-signal"></i> <span class="count color-danger">6 meses</span></h5> 
              
            </div>
          </div>
      </div>
    </div>



        <table class="table">
            <tr>
                <th>Custo</th>
                <td>Custo do projeto: R$</td>
              </tr>
          <tr>
            <th>Qualidade</th>
            <td>Diretor:</td>
            <td>Conselho:</td>
          </tr>
          </table>

          <table class="table">
              <tr>
                  <th>Integração</th>
                  <td> </td>
                </tr>
          <tr>
              <th>Partes interessadas</th>
              <td> </td>
            </tr>
          <tr>
            <th>Aquisições</th>
            <td></td>
          </tr>
           <tr>
            <th>Riscos</th>
            <td></td>
          </tr>
          <tr>
            <th>Recursos Humanos</th>
              <td></td>
            </tr>
            <tr>
                <th>Comunicações</th>
                  <td></td>
                </tr>
        </table>
      </div>


       


    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

  <!-- this row will not appear when printing -->
  <div class="row no-print">
    <div class="col-xs-12">
      <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
      <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Salvar 
      </button>
      <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
        <i class="fa fa-download"></i> PDF
      </button>
    </div>
  </div>
</section>
<!-- /.content -->
<div class="clearfix"></div>
</div>
<!-- /.content-wrapper -->





        

@stop

    
 

 
