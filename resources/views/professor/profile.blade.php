<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Seu perfil" :user="$user">

<head>
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/professores/profile.css')}}">
</head>

<body>

    <h2>Meu Perfil</h2>
    <hr>
    <h2>Informações Pessoais</h2>

    <div class="card-group">
    <div class="card">
        
        <h2>Nome</h2>
        <p>{{$professor->name}}</p>

        <h2>CPF</h2>
        <P>{{$professor->CPF}}</P>

        <h2>RG</h2>
        <P>{{$professor->RG}}</P>

        <h2>Idade</h2>
        <p>{{$professor->age}}</p>

        <h2>Telefone</h2>
        <p>{{$professor->phone}}</p>
    </div>

    <div class="card">
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

    </div>
    </div>
</body>
    
    </x-layout> 