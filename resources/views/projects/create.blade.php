@extends('adminlte::page')
@section('title', 'SCGPCPT')
@section('content')

<div class="box">
    
<!-- general form elements  -->
    <div class="box-header with-border">
        <h3 class="box-title">Criando as Aulas/Cursos</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form role="form" method="POST" action="/projects"  >
            @csrf

            
            <div class="row">

            
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
                <select name="area_projects_id" id="area_projects_id" class="form-control form-control-sm" >
                    <option value="">Selecione uma opção</option>
                </select>
            </div>

        </div>
            <!-- nome da aula-->
            <div class="form-group">
                <label>Nome da aula/curso:</label>
                <input type="text" name="name" class="form-control" placeholder="Digite o nome" required>
            </div>
                    
            <!-- textarea -->
            <div class="form-group">
                <label>Descrição</label>
                <textarea class="form-control" rows="3" name="description" placeholder="Digite a descrição ..."></textarea>
            </div>

            <div class="box-footer clearfix">
                <button type="submit" class="btn btn-primary">Criar Projeto</button>
                <a class="btn btn-default" href="/home">Cancelar</a>
            </div>
        </form>
    </div>
</div>


@endsection

@section('js')
    <script>
        $('#typeProject').on('change', function(e){

            document.getElementById("area_projects_id").innerHTML = "";
            $('#area_projects_id').append(new Option("Selecione uma opçao", "a"));

            var typeProject_id = e.target.value;
            $.ajax({
                'processing': true,
                'serverSide': false,
                type: "GET",
                url: "/typeprojects/"+typeProject_id+"/areas",
                success: function(s) {
                    $.each(s, function(index,area){
                        var option = new Option(area.name,area.id);
                        $('#area_projects_id').append(option);
                    });
                }
            });
        });
    </script>
@stop