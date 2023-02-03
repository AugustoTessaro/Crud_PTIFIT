<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Treinos" :user="$user">

<head>
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/alunos/treino.css')}}">
</head>

<h2>Treinos</h2>
<hr>

<body>


    <div class="card-group">
    @foreach($treinos as $treino)
    <div class="card">
        <div class="card-body">
        <h4>{{$treino->name}}</h4>
        <p>{{$treino->description}}</p>
        </div>
        <div class="card-footer">
    <form action="{{route('treino.show', $treino->id)}}" method= "GET">
        <button class="button-treino"> Ver treino </button>
    </form>
        </div>
    </div>
    @endforeach
    </div>

</body>        
</x-layout>