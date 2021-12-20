<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Iconos fuentes -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Document</title>

</head>
<?php
 
include('config.php');
 
if (isset($_POST['guardar'])) {
 
    $titulo = $_POST['tituloPhp'];
    $poster = $_POST['posterPhp'];
    $favorito = $_POST['favoritoPhp'];
    $valoracion = $_POST['valoracionPhp'];
    $comentario = $_POST['comentarioPhp'];

    $query = $connection->prepare("SELECT * FROM pelicula WHERE titulo=:titulo");
    $query->bindParam("titulo", $titulo, PDO::PARAM_STR);
    $query->execute();
 
    if ($query->rowCount() > 0) {
        echo '<p class="error" style="color:red" >Esta pelicula ya esta registrado!</p>';
    }
 
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO pelicula(titulo,poster,favorito,valoracion,comentario) VALUES (:titulo,:poster,:favorito,:valoracion,:comentario)");
        $query->bindParam("titulo", $titulo, PDO::PARAM_STR);
        $query->bindParam("poster", $poster, PDO::PARAM_STR);
        $query->bindParam("favorito", $favorito, PDO::PARAM_STR);
        $query->bindParam("valoracion", $valoracion, PDO::PARAM_STR);
        $query->bindParam("comentario", $comentario, PDO::PARAM_STR);
        $result = $query->execute();
 
        if ($result) {
            echo '<p class="flow-text" style="color:green" >Se ha guardado</p>';
        } else {
            echo '<p class="error" style="color:red" >Algo esta Mal!</p>';
        }
    }
}
 
?>

<body class="#b39ddb deep-purple lighten-3">
    <br><br><br>
    <input type="text" name="search" id="nombrePeli">
    <button id="buscar" class="btn waves-effect waves-light" name="action">Buscar
        <i class="material-icons right">search</i>
    </button>
    <div class="row">
        <div id="resultado">
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="buscador.js"></script>
</body>

</html>