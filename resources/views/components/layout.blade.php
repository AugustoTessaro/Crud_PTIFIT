<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="{{URL::asset('css/components/layout.css')}}"> -->

    <title>{{$title}}</title>

</head>

<body>
  <nav class="navbar navbar-light navbar-expand-md" style="background-color: #e9ecef">
    <div class="container-fluid" >
      <a class="navbar-brand" href="#">
        <div class="h4"> PTI Fit</div>
         <div class="h6"> Plataforma de Treinos Individuais </div>
      </a> 
      

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-buttons" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbar-buttons">
        <ul class="navbar-nav gap-3">
          
        @if($user->role == 'aluno')
          <li class="nav-item ml-6">
            <a class="nav-link" href="{{route('alunos.treino')}}">
              TREINOS 
            </a>
          </li>

          <li class="nav-item ml-6">
            <a class="nav-link" href="{{route('alunos.show', $user->alunos->id)}}">
              PERFIL
            </a>
          </li>
          @endif 
          @if($user->role == 'professor')
          <li class="nav-item">
            <a class="nav-link" href="{{route('alunos.index')}}">
              ALUNOS
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('professor.index')}}">
              PROFESSORES
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('tipo_exercicio.index')}}"> 
              EXERCICIOS
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('professor.show', $user->professor->id)}}">
              PERFIL
            </a>
          </li>

          @endif
          @if($user->role == 'admin')
          <li class="nav-item">
            <a class="nav-link" href="{{route('alunos.index')}}">
              ALUNOS
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('professor.index')}}">
              PROFESSORES
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('equipamento.index')}}">
              EQUIPAMENTOS
            </a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="{{route('tipo_exercicio.index')}}">
              TIPO DE EXERCICIOS 
            </a>
          </li>
          
          @endif 
          <a href="{{route('logout')}}" class="btn btn-outline-danger ml-6">
            SAIR
          </a>
        </ul>
      </div>

    </div>

  </nav>
   
    <br>
    
    {{$slot}} 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!-- <div>
      <br><br>
    </div> -->

    <div style="height: 3rem;"> 
    </div>

    <!-- <div class="container" >
      <footer class="d-flex flex-wrap justify-content-between border-top mt-4">
        <div class="col-md-3 d-flex justify-content-center">
          <span class="text-muted">academiaptifit@gmail.com</span>
        </div>
        <div class="col-md-6 d-flex justify-content-center ">
          <span class="text-muted">CEP:85860-000</span>
        </div>
        <div class="col-md-3 d-flex justify-content-center">
          <span class="text-muted">Avenida Araucária, 780 - Vila A</span>
        </div>
      </footer>
    </div> -->

  </body>

</html>