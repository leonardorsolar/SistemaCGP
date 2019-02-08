@extends('adminlte::page')

@section('title', 'SCGPCPT')

@section('content')
<div class="col-md-12">

<div class="box">
<!-- general form elements  -->
                <div class="box-header with-border">
                <h3 class="box-title">Criando área do projeto</h3>
                </div>
        <!-- /.box-header -->
        <div class="box-body">


            <form role="form" method="POST" action="/projects/create/areaprojects"  >
                @csrf
                    <!-- text input -->
                    <div class="form-group">
                        <label for="type_project_id">Tipo de projeto:</label>
                        <select id="type_project_id" name="type_project_id" class="form-control form-control-sm">
                            <option value="">Selecione uma opção</option>
                            @foreach($typeProjects as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Nome da área projeto:</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Digite o nome" required>
                    </div>

                    <div class="box-footer clearfix">
                        <button type="submit" class="btn btn-primary">Criar</button>
                        <button type="submit" class="btn btn-default"><a href="/home">Cancelar</a></button>
                    </div>
            </form>
            
            
            
        </div>
       

</div>
</div>

@endsection

