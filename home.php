<?php 
    session_start();

    if(!isset($_SESSION["usuario"]) || json_decode($_SESSION["usuario"])->login = false) {
        header("location: ./");
    }
?>

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
        <h5>
            <b> 
                Olá <?php echo $usuario->nome; ?> 
                <a href="logout.php" class="right red-text">
                    Sair <i class="material-icons">exit_to_app</i>
                </a>
            </b>
        </h5>
    </div>
</body>
</html>
