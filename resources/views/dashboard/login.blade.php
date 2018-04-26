<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login - CAFÉ ODEBRECHT</title>
    <meta name="description" content="Café Odebrecht">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/login.css') }}">
</head>
<body style="background-color:#e5e5e5">


    <div class="align-content-center">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                        <img src="{{asset('dashboard/assets/img/logo.png')}}" class="">
                </div>
                <div class="login-form">
                    <form action="{{ route('login') }}" method="POST">
                      {{ csrf_field() }}
                        <div class="form-group">
                            <label>Usuário</label>
                            <input type="email" class="form-control" name="email" placeholder="Usuário">
                        </div>
                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" class="form-control" name="password" placeholder="Senha">

                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
