<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/menu/menu.css')}}">

    <title>{{$title}}</title>
</head>
<body>
    <header>
        <div class="div_style">
            <br>
            @if($user->role == 'aluno')
                <a href="{{route('alunos.treino')}}">Meus Treinos</a> 
                <a href="{{route('alunos.show', $user->alunos->id)}}">Meus Perfil</a> 
            @endif

            @if($user->role == 'professor')
                <a href="{{route('professor.index')}}">Listagem de professores</a>
                <a href="{{route('equipamento.index')}}">Listagem de equipamentos</a>
                <a href="{{route('tipo_exercicio.index')}}">Cadastrar tipo de Exercicio</a>
                <a href="{{route('alunos.index')}}">Listagem de alunos</a>
                <a href="{{route('professor.show', $user->professor->id)}}">Meus Perfil</a> 
            @endif

            @if($user->role == 'admin')
            <a href="{{route('professor.index')}}">Listagem de professores</a>
            <a href="{{route('equipamento.index')}}">Listagem de equipamentos</a>
            <a href="{{route('tipo_exercicio.index')}}">Cadastrar tipo de Exercicio</a>
            <a href="{{route('alunos.index')}}">Listagem de alunos</a>
        @endif
        
            <form action="{{route('logout')}}" method= "GET">
                <button> Sair </button>
            </form>
            <br>
        </div>
    </header>
    {{$slot}}  
</body>
</html>