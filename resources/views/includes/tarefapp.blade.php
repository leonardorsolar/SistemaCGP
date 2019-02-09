

@foreach($tasks as $task)


<!-- tarefa -->
<li>
              <!-- drag handle -->
              <span class="handle">
                    <i class="fa fa-ellipsis-v"></i>
                    <i class="fa fa-ellipsis-v"></i>
                  </span>
              <!-- checkbox -->
              <input type="checkbox" value="">
              <i class="fa fa-star"></i>
              <!-- todo text -->
              
              <span ><small class="label bg-gray"></i> Seg</small></span>
              <span class="text">{{$task->body}} </span>
              &nbsp;
              <span ><small class="badge bg-red text-muted small lh-125">EM ANDAMENTO</small></span>

              <div class=" btn-group ">
                  <small type="label" class="label bg-green" data-toggle="dropdown">Vet</small>
                  <ul class="dropdown-menu">
                    <li class="text-muted small lh-125">Aula08 Vasectomia</li>
                    <li class="text-muted small lh-125">(Cirurgia de Grandes animais)</li>
                  </ul>
              </div>
              
              <!-- Emphasis label -->
              <!-- bloco do lado esquerdo -->

              <div class="pull-right ">
                  <span class=" label bg-blue">Cin</span>
              <span class="text-muted small lh-125">{{$task->user->name}}</span> &nbsp;
                      <i class="fa fa-edit"></i>
                      <i class="fa fa-trash-o"></i>
                </div>

                  
              <!-- HTML a se escrever -->
   
                  <!-- General tools such as edit or delete-->    
              

            </li>
            <!-- FIM tarefa -->
@endforeach

<script src="js/dashboard.js"></script>



