@extends('adminlte::page')

@section('title', 'SCGPCPT')

@section('content')


<div class="box">
<!-- general form elements  -->
<div class="box box-warning">
                <div class="box-header with-border">
                <h3 class="box-title">Criando as Aulas/Cursos</h3>
                </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form method="POST" action="/projects" class="container" style="padding-top:40px">
                @csrf
                    <!-- text input -->
                    <div class="form-group">
                    <label>Nome da aula/curso:</label>
                    <input type="text" name="name" class="form-control" placeholder="Digite o nome" required>
                    </div>
                    
                    <!-- textarea -->
                    <div class="form-group">
                    <label>Descrição</label>
                    <textarea class="form-control" rows="3" placeholder="Digite a descrição ..."></textarea>
                    </div>

                    <div class="box-footer clearfix">
                        <button type="submit" class="btn btn-primary">Criar Projeto</button>
                        <button type="submit" class="btn btn-default"><a href="/home">Cancelar</a></button>
                    </div>
            </form>
            
            
            
        </div>
       
</div>
</div>

@endsection

