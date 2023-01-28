<x-layout title="Cadastrar" :user="$user">

    <form action="{{route('professor.store')}}" method="POST">
        @csrf
        <label for="name"> Nome </label>
        <input type="text" name="name" id="name" required>

        <label for="email"> Email </label>
        <input type="email" name="email" id="email" required>
         
        <label for="dateBirth"> Data nascimento </label>
        <input type="date" name="dateBirth" id="dateBirth" required>

        <label for="RG"> RG </label>
        <input type="text" name="RG" id="RG" required>

        <label for="CPF"> CPF </label>
        <input type="text" name="CPF" id="CPF" required>        

        <label for="professional_qualification"> Qualificação profissional </label>
        <input type="text" name="professional_qualification" id="professional_qualification" required>        

        <label for="phone"> Telefone </label>
        <input type="tel" name="phone" id="phone" required>        

        <label for="city"> Cidade </label>
        <input type="text" name="city" id="city" required>

        <label for="neighborhood"> Bairro </label>
        <input type="text" name="neighborhood" id="neighborhood" required >

        <label for="street"> Rua </label>
        <input type="text" name="street" id="street" required>

        <label for="number"> Número </label>
        <input type="number" name="number" id="number" required>

        <label for="CEP"> CEP </label>
        <input type="text" name="CEP" id="CEP" required>        

        <label for="password"> Senha </label>
        <input type="password" name="password" id="password" required>

        <button type="submit"> Cadastrar </button>

    </form>

</x-layout>
