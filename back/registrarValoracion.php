<!-- Guardar peliculas como favoritos , valoracion y comentario -->
<?php
 
include('../front/config.php');
 

 
    $favorito = $_POST['favorito'];
    $valoracion = $_POST['valoracion'];
    $comentario = $_POST['comentario'];
    //Insertamos en BD
    $query = $connection->prepare("INSERT INTO pelicula (favorito,valoracion,comentario) VALUES (:favorito,:valoracion,:comentario)");
        $query->bindParam("favorito", $favorito, PDO::PARAM_BOOL);
        $query->bindParam("valoracion", $valoracion, PDO::PARAM_INT);
        $query->bindParam("comentario", $comentario, PDO::PARAM_STR);
        $result = $query->execute();
        
        if ($result) {
            echo '<center><p class="flow-text centrao">Datos guardados correctamente!!</p></center>'; //Guarda
        } else {
            echo '<center><p class="error">No se han podido guardar tus datos!</p></center>'; //No guarda
        }
?>