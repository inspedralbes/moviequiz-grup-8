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
                    <h2>Peliculas Recomendadas</h2>

                    <div class="carousel center-align">
                        <a class="carousel-item" href="#one!"><img
                                src="https://api.lorem.space/image/movie?w=159&h=220"></a>
                        <a class="carousel-item" href="#two!"><img
                                src="https://api.lorem.space/image/movie?w=158&h=220"></a>
                        <a class="carousel-item" href="#three!"><img
                                src="https://api.lorem.space/image/movie?w=153&h=220"></a>
                        <a class="carousel-item" href="#four!"><img
                                src="https://api.lorem.space/image/movie?w=156&h=220"></a>
                        <a class="carousel-item" href="#five!"><img
                                src="https://api.lorem.space/image/movie?w=154&h=220"></a>
                    </div>

                </div>

                <div class="fav">
                    <h3>Carrito de peliculas</h3>
                    <br><br><br>
                    <h3>Puntuacions</h3>
                    <p>Usuari1-20pts</p>
                </div>
                <a class="btn waves-effect waves-light modal-trigger " href="#jugar">JUGAR</a>
                
            </div>
            </br>

            <!-- Juego en JS Sin acabar -->
            <div id="jugar" class="modal">
            <div class="#b39ddb deep-purple lighten-3">
                <div class="modal-content">
                    <div id="juego">
                        <script>
                        fetch('./output_generar_partida.json')
                            .then(response => response.json())
                            .then(data => {
                                console.log(data);
                                const pelis = data.peliculas;

                                let htmlStr = "";

                                for (let index = 0; index < pelis.length; index++) {
                                    const element = pelis[index];

                                    htmlStr += `<div class="centre">
                                    <div class='card'>
                    <h2>${element.Nombre}</h2>
                    <img src='${element.Poster}'>
                    <div>
                    <label>
                      <input type="radio" name="opcion1" id="opcion1_1">
                      <span for="opcion1_1">${element.choice1}</span>
                      </label>
                      <label>
                      <input type="radio" name="opcion1" id="opcion1_1">
                      <span for="opcion1_1">${element.choice2}</span>
                      </label>
                      <label>
                      <input type="radio" name="opcion1" id="opcion1_1">
                      <span for="opcion1_1">${element.choice3}</span>
                      </label>
                      <label>
                      <input type="radio" name="opcion1" id="opcion1_1">
                      <span for="opcion1_1">${element.choice4}</span>
                      </label>
                    </div>
                    </div>
                    </div>`;
                                }
                                htmlStr += `<button id='enviar'>COMPROVAR</button>`;
                                document.getElementById("juego").innerHTML = htmlStr;

                            });
                        </script>

                        <div>
                            <a id="guardar" class="waves-effect waves-light btn #1e88e5 blue darken-1"
                                name="guardar">Guardar Partida</a>
                        </div>




        </form>
    </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-light btn-flat modal-close">Aceptar</a>
    </div>
    </div>
    </div>


    </form>

    </div>
    <script>
        // Activar carrusel
    document.addEventListener('DOMContentLoaded', () => {
        const elements = document.querySelectorAll('.carousel');
        M.Carousel.init(elements, {
            duration: 150,
            dist: -15,

        });

    });
    </script>
    <script>
        // activar modal
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