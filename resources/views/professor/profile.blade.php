<x-layout title="Seu perfil" :user="$user">

    <head>
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/alunos/profile.css')}}"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" type="text/css" href="{{URL::asset('css/professores/profile.css')}}"> -->
    </head>
    
    <body class="body-custom" style="background-color: #f8f9fa">
    
        <div >
        <div class="row display-6 ml-2" style="margin-left: 0.4rem;"> Meu Perfil </div>
            <hr class="col-xs-12">
            <div class="row h4 ml-2 mb-4" style="margin-left: 0.4rem;"> Informações Pessoais </div>
    
            <div class="row justify-content-md-center row-cols-2 gx-5">
                <div class="col-12 col-sm-6 col-md-4 ">
                    <div class="card p-3" style="background-color: #e9ecef">
                    <div class="card-body">
                    
                        <div class="row h5"> Nome </div>
                        <div class="row"> {{$professor->name}} </div> <br>
    
                        <div class="row h5"> CPF </div>
                        <div class="row"> {{$professor->CPF}} </div> <br>
    
                        <div class="row h5"> RG </div>
                        <div class="row"> {{$professor->RG}} </div> <br>
    
                        <div class="row h5" >Idade </div>
                        <div class="row"> {{$professor->age}} </div> <br>
    
                        <div class="row h5"> Telefone </div>
                        <div class="row"> {{$professor->phone}} </div> 
                    </div>
                    </div>
                </div>
    
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card p-3"  style="background-color: #e9ecef">
                    <div class="card-body">
                        <div  class="row h5"> Cidade </div>
                        <div class="row"> {{$e->city}} </div> <br>
    
                        <div class="row h5"> Bairro </div>
                        <div class="row"> {{$e->neighborhood}} </div> <br>
    
                        <div class="row h5"> Rua</div>
                        <div class="row"> {{$e->street}} </div> <br>
    
                        <div class="row h5"> Numero</div> 
                        <div class="row"> {{$e->number}} </div> <br>
    
                        <div class="row h5"> CEP</div>
                        <div class="row"> {{$e->CEP}} </div> 
                    </div>
                </div>
            </div>
        </div>
        
    </body>
        
        </x-layout>