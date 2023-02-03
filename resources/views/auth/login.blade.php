<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">

<head>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/login/login.css')}}">
</head>


<body>


<div class="right-login">
<div class = "caixa-login">

<h1>Acesse o PTI Fit</h1>

<form action="{{route('login.perform')}}" method="POST">
    @csrf
    <label for="email"> Email </label>
    <br>
    <input type="email" name="email" id="email" >
    <br>
    <br>
    <label for="password">  Senha</label>
    <br>
    <input type="password" name="password" id="password" >
<br><br>
    <button type="submit"> ENTRAR </button>
</form>

<p>
Não tem cadastro?
<br>
Venha nos visitar!
</p>
</div>
</div>

<div class = "left-login">
    <img src="img\gym.svg" alt="muscle">

</div>

</body>

<footer>

</footer>