<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/login/login.css')}}">
</head>

<div class="right-login">
<div class = "caixa-login">

<h1>Acesse o PTI Fit</h1>

<form action="{{route('login.perform')}}" method="POST">
    @csrf
    <label for="email"> Email </label>
    <br>
    <input type="text"  value="{{old('email')}}" name="email" id="email" >
    <br>
    <br>
    <label for="password"> Senha</label>
    <br>
    <input type="password" value="{{old('password')}}" name="password" id="password" >
    
<br><br>
    <button type="submit"> ENTRAR </button>
</form>

<p>
Não tem cadastro?
<br>
Venha nos visitar!
@if ($errors->any())
    <div class="alert alert-danger">
        
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

    </div>
@endif
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<body>
</p>
</div>
</div>

<div class = "left-login">
    <img src="img\gym.svg" alt="muscle">

</div>

</body>

<footer>

</footer>