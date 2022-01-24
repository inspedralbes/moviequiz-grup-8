<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<?php
//  Iniciamos BD
include('config.php');
session_start();
//  Registro
if (isset($_POST['register'])) {
 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT); //Encriptamos Password
    //Accedemos a la BD
    $query = $connection->prepare("SELECT * FROM users WHERE EMAIL=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
 
    if ($query->rowCount() > 0) {
        echo '<p class="error" style="color:red" >Este email ya esta registrado!</p>';//Error mail ya registrado
    }
    //Definimos variable para hacer un insert del registro en la BD
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO users(USERNAME,PASSWORD,EMAIL) VALUES (:username,:password_hash,:email)");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $result = $query->execute();
 
        if ($result) {
            echo '<p class="flow-text" style="color:green" >Te has registrado correctamente!!</p>'; //Logeado
        } else {
            echo '<p class="error" style="color:red" >Algo esta Mal!</p>'; //No logeado
        }
    }
}
 
?>
<!-- //Nav login -->
<body class="#d1c4e9 deep-purple lighten-4">
    <div class="row">
        <form class="col s12" method="post" action="" name="signup-form">
            <div class="row">
                <div class="input-field col s6">
                    <input style="color:black" placeholder="Usuario" name="username" id="first_name" type="text" class="validate">
                    <label  for="first_name">Usuario</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" name="password" type="password" class="validate">
                    <label for="last_name">Contraseña</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input name="email" id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="register">Registrarse
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
    <div class="input-field col s3">
        <a class="waves-effect waves-light btn-small" href="index.php">Volver</a>
    </div>
</body>

</html>