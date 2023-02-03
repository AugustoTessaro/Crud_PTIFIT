<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">

<x-layout title="Editar" :user="$user">
<head>
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/alunos/edit.css')}}">
</head>

<h2> Editar Aluno </h2>
<hr>

    <div class="card">
    <form action="{{route('alunos.update', $aluno->id)}}" method="POST"> <br>   
            @csrf
            @method('PUT')
            <div class="fonte">
                <label for="name"> Nome </label> <br>
                <input type="text" value="{{$aluno->name}}" name="name" id="name">
                <br>
                
                <label for="dateBirth"> Data nascimento </label> <br>
                <input type="date" value="{{$aluno->dateBirth}}" name="dateBirth" id="dateBirth">
                <br>

                <label for="CPF"> CPF </label> <br>
                <input type="text" value="{{$aluno->CPF}}" name="CPF" id="CPF">
                <br>

                <label for="RG"> RG </label> <br>
                <input type="text" value="{{$aluno->RG}}" name="RG" id="RG">
                <br>

                <label for="phone"> Telefone </label> <br>
                <input type="tel" value="{{$aluno->phone}}" name="phone" id="phone">
                <br>
         
                <label for="city"> Cidade </label> <br>
                <input type="text" value="{{$aluno->endereco->city}}" name="city" id="city">
                <br>

                <label for="neighborhood"> Bairro </label> <br> 
                <input type="text" value="{{$aluno->endereco->neighborhood}}" name="neighborhood" id="neighborhood">
                <br>

                <label for="street"> Rua </label> <br>
                <input type="text" value="{{$aluno->endereco->street}}" name="street" id="street">
                <br>

                <label for="number"> Número </label> <br> 
                <input type="text" value="{{$aluno->endereco->number}}" name="number" id="number">
                <br>

                <label for="CEP"> CEP </label> <br> 
                <input type="text" value="{{$aluno->endereco->CEP}}" name="CEP" id="CEP">
                <br>
            
                <button class="button-salvar" type="submit"> Salvar </button>
            </div>
    </form>
</div>

</body>

</x-layout>