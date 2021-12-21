<?php
 
include('../front/config.php');
 

 
    $favorito = $_POST['favoritoPhp'];
    $valoracion = $_POST['valoracionPhp'];
    $comentario = $_POST['comentarioPhp'];
    
    
        $query = $connection->prepare("INSERT INTO pelicula(favorito,valoracion,comentario) VALUES (:favorito,:valoracion,:comentario)");
        $query->bindParam("favorito", $favorito, PDO::PARAM_STR);
        $query->bindParam("valoracion", $valoracion, PDO::PARAM_STR);
        $query->bindParam("comentario", $comentario, PDO::PARAM_STR);
        $result = $query->execute();
 
        if ($result) {
            echo '<p class="flow-text" style="color:green" >Se ha guardado</p>';
        } else {
            echo '<p class="error" style="color:red" >Algo esta Mal!</p>';
        }
    

 
?>