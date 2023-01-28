<x-layout title="Seu perfil" :user="$user">

    <body>
        
        <div>
            <h1>{{$professor->name}}</h1>
        </div>
    
        <div>
            <h1>Informações Pessoais</h1>
            <h2>CPF</h2>
            <P>{{$professor->CPF}}</P>
            <h2>Idade</h2>
            <h2>{{$professor->age}}</h2>
            <h2>Qualifocação profissional</h2>
            <p>{{$professor->professional_qualification}}</p>
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
            <p>{{$professor->phone}}</p>
        </div>
    
    </body>
    
    </x-layout>    