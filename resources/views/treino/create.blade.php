<x-layout title="Criar">

    <form action="{{route('treino.store')}}" method="POST">
        @csrf
        <?php var_dump($aluno->name); ?>        

        <label for="init_date"> Data de início </label>
        <input type="date" name="init_date" id="init_date">

        <label for="end_date"> Data de término </label>
        <input type="date" name="end_date" id="end_date">

        <label for="name"> Nome </label>
        <input type="text" name="name" id="name">

        <label for="description"> Descrição </label>
        <input type="text" name="description" id="description">     
        
        <input type="hidden" value="{{$aluno->id}}" name="id_aluno" id="id_aluno">

        <button type="submit"> Cadastrar </button>


    </form>

</x-layout>