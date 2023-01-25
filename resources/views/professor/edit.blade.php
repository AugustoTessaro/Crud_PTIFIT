<x-layout title="Editar" :role="$user->role">

    <form action="{{route('professor.update', $professor->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="name"> Nome </label>
        <input type="text" value="{{$professor->name}}" name="name" id="name">

        <label for="dateBirth"> Data nascimento </label>
        <input type="date" value="{{$professor->dateBirth}}" name="dateBirth" id="dateBirth">

        <label for="CPF"> CPF </label>
        <input type="text" value="{{$professor->CPF}}" name="CPF" id="CPF">

        <label for="RG"> RG </label>
        <input type="text" value="{{$professor->RG}}" name="RG" id="RG">

        <label for="professional_qualification"> Qualificação profissional </label>
        <input type="text" value="{{$professor->professional_qualification}}" name="professional_qualification" id="professional_qualification">  

        <label for="phone"> Telefone </label>
        <input type="tel" value="{{$professor->phone}}" name="phone" id="phone">

        <label for="city"> Cidade </label>
        <input type="text" value="{{$professor->endereco->city}}" name="city" id="city">

        <label for="neighborhood"> Bairro </label>
        <input type="text" value="{{$professor->endereco->neighborhood}}" name="neighborhood" id="neighborhood">

        <label for="street"> Rua </label>
        <input type="text" value="{{$professor->endereco->street}}" name="street" id="street">

        <label for="number"> Número </label>
        <input type="text" value="{{$professor->endereco->number}}" name="number" id="number">

        <label for="CEP"> CEP </label>
        <input type="text" value="{{$professor->endereco->CEP}}" name="CEP" id="CEP">

        <button type="submit"> Salvar </button>


    </form>

</x-layout>