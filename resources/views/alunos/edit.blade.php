<x-layout title="Editar" :role="$user->role">

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

        <label for="city"> Cidade </label>
        <input type="text" value="{{$aluno->endereco->city}}" name="city" id="city">

        <label for="neighborhood"> Bairro </label>
        <input type="text" value="{{$aluno->endereco->neighborhood}}" name="neighborhood" id="neighborhood">

        <label for="street"> Rua </label>
        <input type="text" value="{{$aluno->endereco->street}}" name="street" id="street">

        <label for="number"> Número </label>
        <input type="text" value="{{$aluno->endereco->number}}" name="number" id="number">

        <label for="CEP"> CEP </label>
        <input type="text" value="{{$aluno->endereco->CEP}}" name="CEP" id="CEP">

        <button type="submit"> Salvar </button>


    </form>

</x-layout>