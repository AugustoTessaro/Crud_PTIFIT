<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">

<x-layout title="Editar" :user="$user">
<head>
    <!-- <link rel="stylesheet" type="text/css" href="{{URL::asset('css/alunos/edit.css')}}"> -->
</head>

<body class="body-custom" style="background-color: #f8f9fa;">
    
    <div>
        <div class="row ml-2">
            <div class="d-flex flex-row justify-content-between">
                <div class="display-6  ms-3">Editar Aluno</div> 
            </div>
        </div>

        <hr class="col-xs-12" style="margin-bottom: 2rem;">
        <div class="row gap-3 justify-content-evenly">

    <div class="col-md-5 col-12 container">
        <div class="card p-4" style="background-color: #e9ecef">
        <form action="{{route('alunos.update', $aluno->id)}}" method="POST"> <br>   
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label class="form-label" for="name"> Nome </label>
                    <input class="form-control" type="text" value="{{$aluno->name}}" name="name" id="name">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="dateBirth"> Data Nascimento </label>
                    <input class="form-control" type="date" value="{{$aluno->dateBirth}}" name="dateBirth" id="dateBirth">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="CPF"> CPF </label>
                    <input class="form-control" type="text" value="{{$aluno->CPF}}" name="CPF" id="CPF">
                </div>
                
                <div class="mb-3">
                    <label class="form-label" for="RG"> RG </label>
                    <input class="form-control" type="text" value="{{$aluno->RG}}" name="RG" id="RG">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="phone"> Telefone </label>
                    <input class="form-control" type="tel" value="{{$aluno->phone}}" name="phone" id="phone">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="city"> Cidade </label>
                    <input class="form-control" type="text" value="{{$aluno->endereco->city}}" name="city" id="city">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="neighborhood"> Bairro </label>
                    <input class="form-control" type="text" value="{{$aluno->endereco->neighborhood}}" name="neighborhood" id="neighborhood">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="street"> Rua </label>
                    <input class="form-control" type="text" value="{{$aluno->endereco->street}}" name="street" id="street">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="number"> Número </label>
                    <input class="form-control" type="text" value="{{$aluno->endereco->number}}" name="number" id="number">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="neighborhood"> CEP </label>
                    <input class="form-control" type="text" value="{{$aluno->endereco->CEP}}" name="CEP" id="CEP">
                </div>

                
                <div class="d-flex flex-row justify-content-end">
                    <div>
                        <button class="btn btn-outline-primary" type="submit"> Salvar </button>
                    </div>
                </div>
        </form>
    </div>
    </div>
</div>
</div>

</body>

</x-layout>