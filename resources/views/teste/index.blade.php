 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="UTF-8"/>
     <title>Document</title>
 </head>
 <body>
     <!-- Conteúdo -->
     teste

     @forelse ($area_projects as $area)
    <ul>
    <li>
    <h1>{{$area->name}}</h1>
    </li>
    @empty
    <li>No projects yet.</li>
    @endforelse
    </ul>

</body>
</html>