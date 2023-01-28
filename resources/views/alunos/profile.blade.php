<x-layout title="Seu perfil" :user="$user">

<body>
    
    <div>
        <h1>{{$aluno->name}}</h1>
    </div>

    <div>
        <h1>Informações Pessoais</h1>
        <h2>CPF</h2>
        <P>{{$aluno->CPF}}</P>
        <h2>Idade</h2>
        <h2>Cidade</h2>
        <p>{{$e->city}}</p>
        <h2>Bairro</h2>
        <p>{{$e->neighborhood}}</p>
        <h2>Rua</h2>
        <p>{{$e->street}}</p>
        <h2>Numero</h2>
        <p>{{$e->number}}</p>
        <h2>CEP</h2>
        <p>{{$e->CEP}}</p>
        <h2>Telefone</h2>
        <p>{{$aluno->phone}}</p>
    </div>

</body>

</x-layout>    