<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uniasselvi API</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <br><br><br>
    <div class="container">
        <div class="row">
            <form action="./" method="post" id="form_login" class="col s12 16 push-13">
                <h5><b>Login</b></h5>
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Usuário" type="text" name="user" id="user" class="validate" autocomplete="off">
                        <label for="user">Usuário</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="password" name="pass" id="password" class="validate">
                        <label for="pass">Senha</label>
                    </div>
                </div>
                <a class="waves-effect waves-light btn right" id="login_btn"> 
                    <i class="material-icons right">send</i>
                    Entrar
                </a>
            </form>
        </div>
    </div>
    
</body>
</html>