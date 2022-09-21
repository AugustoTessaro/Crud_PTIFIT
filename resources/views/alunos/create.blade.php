<x-layout title="Cadastrar">

    <form action="{{route('alunos.store')}}" method="POST">
        @csrf
        <label for="name"> Nome </label>
        <input type="text" name="name" id="name">

        <label for="dateBirth"> Data nascimento </label>
        <input type="date" name="dateBirth" id="dateBirth">

        <label for="CPF"> CPF </label>
        <input type="text" name="CPF" id="CPF">

        <label for="RG"> RG </label>
        <input type="text" name="RG" id="RG">

        <label for="phone"> Telefone </label>
        <input type="tel" name="phone" id="phone">
        <button type="submit"> Cadastrar </button>


    </form>

</x-layout>
