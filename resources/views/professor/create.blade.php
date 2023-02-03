<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">

<x-layout title="Cadastrar" :user="$user">
<head>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/professores/create.css')}}">
</head>

<h2> Cadastrar Professor </h2>
<hr>

<div class="card">
    <form action="{{route('professor.store')}}" method="POST">
        @csrf
        <div class="fonte">
            <label for="name"> Nome </label> <br>
            <input type="text" name="name" id="name" required> <br>

            <label for="email"> Email </label> <br>
            <input type="email" name="email" id="email" required> <br>
            
            <label for="dateBirth"> Data nascimento </label> <br>
            <input type="date" name="dateBirth" id="dateBirth" required> <br>

            <label for="RG"> RG </label> <br>
            <input type="text" name="RG" id="RG" required> <br>

            <label for="CPF"> CPF </label> <br>
            <input type="text" name="CPF" id="CPF" required> <br>       

            <label for="professional_qualification"> Qualificação Profissional </label> <br>
            <input type="text" name="professional_qualification" id="professional_qualification" required> <br>       

            <label for="phone"> Telefone </label> <br>
            <input type="tel" name="phone" id="phone" required> <br>   

            <label for="city"> Cidade </label> <br>
            <input type="text" name="city" id="city" required> <br>

            <label for="neighborhood"> Bairro </label> <br>
            <input type="text" name="neighborhood" id="neighborhood" required > <br>

            <label for="street"> Rua </label> <br>
            <input type="text" name="street" id="street" required> <br>

            <label for="number"> Número </label> <br>
            <input type="number" name="number" id="number" required> <br>

            <label for="CEP"> CEP </label> <br>
            <input type="text" name="CEP" id="CEP" required> <br>       

            <label for="password"> Senha </label> <br>
            <input type="password" name="password" id="password" required> <br>
            <button type="submit"> Cadastrar </button>
        </div>

    </form>

</div>

</x-layout>
