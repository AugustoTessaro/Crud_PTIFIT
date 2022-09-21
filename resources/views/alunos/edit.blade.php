<x-layout title="Editar">

    <form action="{{route('alunos.update', $aluno->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="name"> Nome </label>
        <input type="text" value="{{$aluno->name}}" name="name" id="name">

        <label for="dateBirth"> Data nascimento </label>
        <input type="date" value="{{$aluno->dateBirth}}" name="dateBirth" id="dateBirth">

        <label for="CPF"> CPF </label>
        <input type="text" value="{{$aluno->CPF}}" name="CPF" id="CPF">

        <label for="RG"> RG </label>
        <input type="text" value="{{$aluno->RG}}" name="RG" id="RG">

        <label for="phone"> Telefone </label>
        <input type="tel" value="{{$aluno->phone}}" name="phone" id="phone">
        <button type="submit"> Salvar </button>


    </form>

</x-layout>