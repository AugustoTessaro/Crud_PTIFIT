<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Criar" :user="$user">
<head>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/treino/create.css')}}">
</head>



<h2> Criar Treino </h2>
<hr>
    <div class="card"> 
    <form action="{{route('treino.store')}}" method="POST">
        @csrf      
        
            <label for="init_date"> Data de início </label> <br>
            <input type="date" name="init_date" id="init_date" required> <br>

            <label for="end_date"> Data de término </label> <br>
            <input type="date" name="end_date" id="end_date" required> <br>
            <label for="name"> Nome </label> <br>
            <input type="text" name="name" id="name" required> <br>

            <label for="description"> Descrição </label> <br>
            <input type="text" name="description" id="description" required> <br>
            
            <input type="hidden" value="{{$aluno->id}}" name="aluno_id" id="aluno_id">
            <br>
            <button class="button-cadastrar" type="submit"> Cadastrar </button>
       

    </form>
 </div>

</x-layout>