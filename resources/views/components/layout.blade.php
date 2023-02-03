<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/components/layout.css')}}">

    <title>{{$title}}</title>

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary text-light">
            <header>
                <a class="navbar-brand" href="#">
                  <h2>PTI FIT</h2>
                  <p> Plataforma de Treinos Individuais</p>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
                </button>
            </header>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                @if($user->role == 'aluno')
                <li class="nav-item">
                  <a class="nav-link" href="{{route('alunos.treino')}}">
                  <p class="items">Meus treinos </p>  
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('alunos.show', $user->alunos->id)}}">
                    <p class="items">Meu perfil</p>
                  </a>
                </li>
                @endif
                @if($user->role == 'professor')
                <li class="nav-item">
                  <a class="nav-link" href="{{route('tipo_exercicio.index')}}">
                  <p class="items">Exercicios</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('professor.show', $user->professor->id)}}">
                    <p class="items">Meu Perfil</p>
                  </a>
                  </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <p class="items">Listagens</p>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('alunos.index')}}">Listagem de alunos</a>
                    <a class="dropdown-item" href="{{route('professor.index')}}">Listagem de professores</a>
                  </div>
                </li>
                @endif
                @if($user->role == 'admin')
                <li class="nav-item">
                  <a class="nav-link" href="{{route('tipo_exercicio.index')}}">Exercicios </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('equipamento.index')}}">Equipamentos</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Listagens
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('alunos.index')}}">Listagem de alunos</a>
                    <a class="dropdown-item" href="{{route('professor.index')}}">Listagem de professores</a>
                  </div>
                </li>
                @endif
                <a href="{{route('logout')}}" class="btn btn-danger">Sair</a>
              </ul>
            </div>
          </nav>

    </header>
    <br>
    <br>
    {{$slot}} 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>