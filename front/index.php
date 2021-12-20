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
                        <a class="carousel-item" href="#three!"><img src="https://api.lorem.space/image/movie?w=153&h=220"></a>
                        <a class="carousel-item" href="#four!"><img src="https://api.lorem.space/image/movie?w=156&h=220"></a>
                        <a class="carousel-item" href="#five!"><img src="https://api.lorem.space/image/movie?w=154&h=220"></a>
                </div>

                </div>

                <div class="fav">
                    <h1>Carrito de peliculas</h1>
                   
                   
                </div>
                <a class="btn waves-effect waves-light modal-trigger" href="#jugar">JUGAR</a>
            </div>
            
            <div id="jugar" class="modal">
                <div class="modal-content">
                    <div id="juego">
                        <h1>Juguemos</h1>
                        <form method="post">
                        <h3 name="titulo" id="titulo"></h3>
                        <h5>De que Años es esta Peli?</h5>
                        <img src="https://api.lorem.space/image/movie?w=154&h=220">
                            <div>
                               
                            </div>
                            <div>
                                <br>
                                <label>
                                    <input name="valoracion" id="valoracion" type="radio" value="1"/>
                                    <span>2005</span>
                                </label>
                                <label>
                                    <input name="valoracion" id="valoracion" type="radio" value="2"/>
                                    <span>2006</span>
                                </label>
                                <label>
                                    <input name="valoracion" id="valoracion" type="radio" value="3"/>
                                    <span>2007</span>
                                </label>
                                <label>
                                    <input name="valoracion" id="valoracion" type="radio" value="4"/>
                                    <span>2008</span>
                                </label>
                             
                            </div>
                           
                            <div>
                                <a id="guardar" class="waves-effect waves-light btn #1e88e5 blue darken-1" name="guardar">Guardar Partida</a>
                            </div>
                           
                         


                        </form>
                    </div>
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
            duration: 150,
            dist: -15,
            
        });
        
    });
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
  });

    </script>
    <?php
        require_once('footer.php');
    ?>
</body>

</html>