<head>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/menu/menu.css')}}">
</head>
<form action="{{route('login.perform')}}" method="POST">
    @csrf
    <label for="email"> Email </label>
    <input type="email" name="email" id="email">
    
    <label for="password"> Senha </label>
    <input type="password" name="password" id="password">

    <button type="submit"> Login </button>
</form>