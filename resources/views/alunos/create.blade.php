<x-layout title="Cadastrar">

    <form action="{{route('alunos.store')}}" method="POST">
        @csrf
        <label for="name"> Nome </label>
        <input type="text" name="name" id="name">

        <label for="email"> Email </label>
        <input type="email" name="email" id="email">

        <label for="dateBirth"> Data nascimento </label>
        <input type="date" name="dateBirth" id="dateBirth">

        <label for="CPF"> CPF </label>
        <input type="text" name="CPF" id="CPF">

        <label for="RG"> RG </label>
        <input type="text" name="RG" id="RG">

        <label for="phone"> Telefone </label>
        <input type="tel" name="phone" id="phone">        

        <label for="city"> Cidade </label>
        <input type="text" name="city" id="city">

        <label for="neighborhood"> Bairro </label>
        <input type="text" name="neighborhood" id="neighborhood">

        <label for="street"> Rua </label>
        <input type="text" name="street" id="street">

        <label for="number"> Número </label>
        <input type="number" name="number" id="number">

        <label for="CEP"> CEP </label>
        <input type="text" name="CEP" id="CEP">        

        <label for="password"> Senha </label>
        <input type="password" name="password" id="password">

        <button type="submit"> Cadastrar </button>

    </form>

</x-layout>
