<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">

<x-layout title="Cadastrar" :user="$user">
<head>
    <!-- <link rel="stylesheet" type="text/css" href="{{URL::asset('css/alunos/create.css')}}"> -->
</head>

<body class="body-custom" style="background-color: #f8f9fa;">

    <div>
        <div class="row ml-2">
            <div class="d-flex flex-row justify-content-between">
                <div class="display-6 ms-3">Cadastrar Aluno</div> 
            </div>
        </div>

        <hr class="col-xs-12" style="margin-bottom: 2rem;">
        <div class="row gap-3 justify-content-evenly">

    <div class="col-md-5 col-12 container ">
        <div class="card p-4" style="background-color: #e9ecef">
            <form action="{{route('alunos.store')}}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label class="form-label" for="name"> Nome </label>
                    <input class="form-control" type="text" name="name" id="name" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label" for="email"> Email </label>
                    <input class="form-control" type="email" name="email" id="email" required>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="dateBirth"> Data nascimento </label>
                    <input class="form-control" type="date" name="dateBirth" id="dateBirth" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label" for="CPF"> CPF </label>
                    <input class="form-control" type="text" name="CPF" id="CPF" required>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="RG"> RG </label>
                    <input class="form-control" type="text" name="RG" id="RG" required>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="phone"> Telefone </label>
                    <input class="form-control" type="tel" name="phone" id="phone" required>
                </div>    
                
                <div class="mb-3">
                    <label class="form-label" for="city"> Cidade </label>
                    <input class="form-control" type="text" name="city" id="city" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label" for="neighborhood"> Bairro </label>
                    <input class="form-control" type="text" name="neighborhood" id="neighborhood" required>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="street"> Rua </label>
                    <input class="form-control" type="text" name="street" id="street" required>
                </div>
                    
                <div class="mb-3">
                    <label class="form-label" for="number"> Numero </label>
                    <input class="form-control" type="number" name="number" id="number" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label" for="CEP"> CEP </label>
                    <input class="form-control" type="text" name="CEP" id="CEP" required>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="password"> Senha </label>
                    <input class="form-control" type="password" name="password" id="password" required>
                </div>
                
                <div class="d-flex flex-row justify-content-end">
                    <div>
                        <button class="btn btn-outline-success" type="submit"> Cadastrar </button>
                    </div>
                </div>
            </form>
        </div> 
        </div>
    </div>
    </div>
</body>

</x-layout>