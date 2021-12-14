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

<body class="#b39ddb deep-purple lighten-3">
    <?php
        require_once('header.php');
    ?>
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
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems);
    });
    </script>
</body>

</html>