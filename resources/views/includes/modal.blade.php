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

                    <form>

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
                                <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                                    <option>Lançamentos</option>
                                    <option>Veterinária</option>
                                    <option>Professor Eventual</option>
                                    <option>Outros</option>
                                </select>
                            </div>

                            <!-- selecionar área de projeto -->
                            <div class="form-group col-md-3">

                                <label for="exampleFormControlSelect1">Área</label>
                                <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                                    <option>Informática</option>
                                    <option>Histologia</option>
                                    <option>Volume 2</option>
                                    <option>Outras</option>
                                </select>
                            </div>

                            <!-- selecionar curso/aula-->
                            <div class="form-group col-md-3">
                                <label for="exampleFormControlSelect1">Curso/Aula</label>
                                <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                                    <option>Curso de Informática</option>
                                    <option>Aula08:Tecido Conjuntivo</option>
                                    <option>Empreender para Aprender</option>
                                    <option>Vt Veterinária</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-group ">
                            <!-- Adicionar tarefa-->

                            <label for="recipient-name" class="col-form-label">Adicionar Tarefa:</label>
                            <input type="text" class="form-control form-control-sm" id="recipient-name">

                        </div>

                        <div class="form-row">
                            <!-- selecionar datas -->
                            <div class="form-group col-md-6">

                              <!-- Date -->
              <div class="form-group">
                    <label>Date:</label>
    
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="datepicker">
                    </div>
                    <!-- /.input group -->
                            </div>
                            

                        </div>
                    </form>
                </div>

                <div class="modal-footer ">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    </div>

        <!-- Calendário boostrap 4 https://investmentnovel.com/how-to-use-bootstrap-datepicker-in-laravel/ -->
        


        