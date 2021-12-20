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
    <div id="areaBuscar" class="oculta">
        <?php
        require_once('buscador.php');
    ?>
    </div>

    <div id="areaIndex">
        <form method="POST">
            <div class="container">
                <div class="masvistas">
                    <h4>Peliculas Recomendadas</h4>

                <div class="carousel center-align">
                        <a class="carousel-item" href="#one!"><img src="https://api.lorem.space/image/movie?w=159&h=220"></a>
                        <a class="carousel-item" href="#two!"><img src="https://api.lorem.space/image/movie?w=158&h=220"></a>
                        <a class="carousel-item" href="#three!"><img src="https://api.lorem.space/image/movie?w=159&h=220"></a>
                        <a class="carousel-item" href="#four!"><img src="https://api.lorem.space/image/movie?w=156&h=220"></a>
                        <a class="carousel-item" href="#five!"><img src="https://api.lorem.space/image/movie?w=154&h=220"></a>
                </div>

                </div>

                <div class="fav">
                    <h1>Carrito de peliculas</h1>
                    <img src="img/cars.jpg" width="100px" height="150px"><br>
                    <i style="text-align:center">Cars</i>
                    <a class="btn waves-effect waves-light modal-trigger" href="#jugar">JUGAR</a>
                </div>
            </div>
            <div id="jugar" class="modal">
                <div class="modal-content">
                    <div id="juego"></div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="waves-effect waves-light btn-flat modal-close">Aceptar</a>
                </div>
            </div>



        </form>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const elements = document.querySelectorAll('.carousel');
        M.Carousel.init(elements, {
            duration: 150
        });
        
    });
    </script>
</body>

</html>