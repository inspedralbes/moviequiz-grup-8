<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="css/index.css">
    
    <title>Movie Quiz</title>
    <?php
        require_once('header.php');
    ?>
</head>

<body class="#b39ddb deep-purple lighten-3">
    <br>
    <br>
    <br>
    

<form action="buscador.php" method="POST">
<button class="btn waves-effect waves-light" type="submit" name="search" value="Buscar">Buscar pelis
    <i class="material-icons right">find_in_page</i>
</button>
    <div class="container">
  <div class="masvistas">
<h4>Peliculas Mas Vistas</h4>

<div id="vistas">
    <h5>1 2 3 4 5 6 7 8 </h5>
</div>
  </div>

  <div class="fav">
  <h1>1</h1>

  </div>
</div>
    



</form>
</form>
</body>

</html>