<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>

    <a href="{{route('alunos.index')}}">Listagem de alunos</a> 

    
    @if($role != 'aluno')
        <a href="{{route('professor.index')}}">Listagem de professores</a>
    @endif

    <form action="{{route('logout')}}" method= "GET">
        <button> Sair </button>
    </form>

</head>
<body>
    {{$slot}}  
    
</body>
</html>