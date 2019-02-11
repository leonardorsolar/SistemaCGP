<div class="todo-list">
    <h2>Tarefas</h2>

   

   {{-- tasks --}}
   @foreach ($project->tasks as $task)
   <!-- tarefa -->
<li>
    <!-- drag handle -->
    <span class="handle ">
          <i class="fa fa-ellipsis-v"></i>
          <i class="fa fa-ellipsis-v"></i>
        </span>
    <!-- checkbox -->
    <input type="checkbox" value="">
    <i class="fa fa-star"></i>
    <!-- todo text -->
    <span class="text-muted small lh-125 ">Segunda-feira 01/02</span>
    
    <span class="text-black">{{ $project->name }}</span>
    <span class="text-muted small lh-125"> Cirurgia de Grandes animais</span>
    <small class="label label-danger"></i> em análise</small>
    <div class="tools">
        <i class="fa fa-edit"></i>
        <i class="fa fa-trash-o"></i>
      </div>
      <span></span>
      <form method="POST" action="{{$project->path() . '/tasks/'. $task->id}}" >
        @method('PATCH')
        @csrf


    <div class="input-group">
          
        <input type="text-dark" class="form-control " name="body" value="{{ $task->body }}">
        
        <span class="input-group-addon"><input type="checkbox" name="completed" onchange="this.form.submit()"  ></span>
                          <!-- General tools such as edit or delete-->
      </div>

    </form>
  </li>
  <!-- FIM tarefa -->   
   @endforeach

         <!-- tarefa -->
    <li>
        <!-- drag handle -->
        <span class="handle ">
              <i class="fa fa-ellipsis-v"></i>
              <i class="fa fa-ellipsis-v"></i>
            </span>
        <!-- checkbox -->
        <input type="checkbox" value="">
        
        <i class="fa fa-star"></i>
        <!-- todo text -->
        <span class="text-muted small lh-125 ">Segunda-feira 01/02</span>
        
        <span class="text-black">{{ $project->name }}</span>
        <span class="text-muted small lh-125"> Cirurgia de Grandes animais</span>
        <small class="label label-danger"></i> em análise</small>
        <div class="tools">
            <i class="fa fa-edit"></i>
            <i class="fa fa-trash-o"></i>
          </div>
          <span></span>
          <form action="{{$project->path() . '/tasks'}}" method="POST">
                @csrf
        <div class="input-group">
              
            <input type="text-dark" class="form-control" name="body"  placeholder="Adicionar uma nova tarefa">
            <span class="input-group-addon"><i class="fa fa-refresh"></i></span>
                              <!-- General tools such as edit or delete-->
                
          </div>
        </form>
      </li>
      <!-- FIM tarefa --> 
      
</div>

