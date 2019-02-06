@extends('adminlte::page')

@section('title', 'SCGPCPT')

@section('content')
<div class="col-md-12">

<div class="box">
<!-- general form elements  -->
                <div class="box-header with-border">
                <h3 class="box-title">Criando os setores</h3>
                </div>
        <!-- /.box-header -->
        <div class="box-body">


            <form role="form" method="POST" action="/projects/create/sector"  >
                @csrf
                    <!-- text input -->
                    <div class="form-group">
                    <label>Nome do setor:</label>
                    <input type="text" name="name" class="form-control" placeholder="Digite o nome" required>
                    </div>
                    
                   

                    <div class="box-footer clearfix">
                        <button type="submit" class="btn btn-primary">Criar setor</button>
                        <button type="submit" class="btn btn-default"><a href="/home">Cancelar</a></button>
                    </div>
            </form>
            
            
            
        </div>
       

</div>
</div>

@endsection

