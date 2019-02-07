@extends('adminlte::page')

@section('title', 'SCGPCPT')

@section('content')


<div class="col-md-12">

<div class="box">
<!-- general form elements  -->
                <div class="box-header with-border">
                <h3 class="box-title">Editando Aulas/Cursos</h3>
                </div>
        <!-- /.box-header -->
        <div class="box-body">


            <form role="form" method="POST" action="{{$project->path()}}"  >
                @csrf
                @method('PATCH')
                    <!-- text input -->
                    <div class="form-group">
                    <label>Nome da aula/curso:</label>
                    <input type="text" 
                            name="name" 
                            class="form-control" 
                            placeholder="Digite o nome" 
                            value="{{$project->name}}"
                            required>
                    </div>
                    
                    <!-- textarea -->
                    <div class="form-group">
                    <label>Descrição</label>
                    <textarea class="form-control" rows="3" placeholder="Digite a descrição ..."></textarea>
                    </div>

                    <div class="box-footer clearfix">
                        <button type="submit" class="btn btn-primary">Atualizar Projeto</button>
                        <button type="submit" class="btn btn-default"><a href="{{$project->path()}}">Cancelar</a></button>
                    </div>
            </form>
            
            
            
        </div>
       

</div>
</div>

@endsection

