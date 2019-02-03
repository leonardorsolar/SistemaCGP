<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <ul>
        <h1>Listando as aulas/cursos cadastrados</h1>
        @forelse ($projects as $project)
        
        <li>
            <a href="{{ $project->path()}}">{{ $project->name}}</a>
        </li>
        @empty
        <li>No projects yet.</li>
        @endforelse
 </ul>
     
    
</body>
</html>
