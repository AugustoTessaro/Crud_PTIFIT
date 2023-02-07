<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Editar" :user="$user">

<head>
    <!-- <link rel="stylesheet" type="text/css" href="{{URL::asset('css/professores/edit.css')}}"> -->
</head>

<body class="body-custom" style="background-color: #f8f9fa;">
    
    <div >
        <div class="row ml-2">
            <div class="d-flex flex-row justify-content-between">
                <div class="display-6 ms-3">Editar Professor</div> 
            </div>
        </div>

        <hr class="col-xs-12" style="margin-bottom: 2rem;">
        <div class="row gap-3 justify-content-evenly">

    <div class="col-md-5 col-12 ">
        <div class="card p-4" style="background-color: #e9ecef">
            <form action="{{route('professor.update', $professor->id)}}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label class="form-label" for="name"> Nome </label>
                    <input class="form-control" type="text" value="{{$professor->name}}" name="name" id="name">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="dateBirth"> Data Nascimento </label>
                    <input class="form-control" type="date" value="{{$professor->dateBirth}}" name="dateBirth" id="dateBirth">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="CPF"> CPF </label>
                    <input class="form-control" type="text" value="{{$professor->CPF}}" name="CPF" id="CPF">
                </div>
                
                <div class="mb-3">
                    <label class="form-label" for="RG"> RG </label>
                    <input class="form-control" type="text" value="{{$professor->RG}}" name="RG" id="RG">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="professional_qualification"> Qualificação Profissional </label>
                    <input class="form-control" type="text" value="{{$professor->professional_qualification}}" name="professional_qualification" id="professional_qualification">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="phone"> Telefone </label>
                    <input class="form-control" type="tel" value="{{$professor->phone}}" name="phone" id="phone">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="city"> Cidade </label>
                    <input class="form-control" type="text" value="{{$professor->endereco->city}}" name="city" id="city">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="neighborhood"> Bairro </label>
                    <input class="form-control" type="text" value="{{$professor->endereco->neighborhood}}" name="neighborhood" id="neighborhood">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="street"> Rua </label>
                    <input class="form-control" type="text" value="{{$professor->endereco->street}}" name="street" id="street">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="number"> Número </label>
                    <input class="form-control" type="text" value="{{$professor->endereco->number}}" name="number" id="number">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="neighborhood"> CEP </label>
                    <input class="form-control" type="text" value="{{$professor->endereco->CEP}}" name="CEP" id="CEP">
                </div>

                <div class="d-flex flex-row justify-content-end">
                    <div>
                        <button class="btn btn-outline-success" type="submit"> Salvar </button>
                    </div>
                </div>

            </form>
        </div>
        </div>
    </div>
    </div>

</body>
</x-layout>