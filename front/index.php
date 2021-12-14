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
<h4>Peliculas Recomendadas</h4>

<div id="vistas">
<div class="col s2">
       
        
            <div class="card-image">
            
                <img src="https://api.lorem.space/image/movie?w=159&h=220" width="250px" height="350px">
                <img src="https://api.lorem.space/image/movie?w=158&h=220" width="250px" height="350px">
                <img src="https://api.lorem.space/image/movie?w=157&h=220" width="250px" height="350px">
                <img src="https://api.lorem.space/image/movie?w=156&h=220" width="250px" height="350px">
                <img src="https://api.lorem.space/image/movie?w=155&h=220" width="250px" height="350px">
                <img src="https://api.lorem.space/image/movie?w=154&h=220" width="250px" height="350px">
            </div>
            </div>

</div>
  </div>

  <div class="fav">
  <h1>Carrito de peliculas</h1>
  <img src="img/cars.jpg"  width="100px" height="150px"><br>
  <i style="text-align:center">Cars</i>
  <a class="btn waves-effect waves-light modal-trigger" id="jugar" href="#jugar">JUGAR</a>
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
<script>
    document.getElementById("jugar").addEventListener("click", function() {
    let busqueda = document.getElementById("nombrePeli").value;
    document.getElementById("nombrePeli").value = "";
    var url = `http://www.omdbapi.com/?apikey=58b1abc&s=${busqueda}`;

    fetch(url).then(res => res.json())
        .catch(error => console.error('Error:', error))
        .then(function(response) {
            console.log('Success:', response.Search);
            let d = response.Search;
        let htmlStr="";

        for (let index = 0; index < pelis.length; index++) {
          const element = pelis[index];        

          htmlStr += `<div class='card'>
                    <h2>${element.Nombre}</h2>
                    <img src='${element.Poster}'>
                    <div>
                      <input type="checkbox" name="opcion1" id="opcion1_1">
                      <label for="opcion1_1">${element.choice1}</label>
                      <input type="checkbox" name="opcion1" id="opcion1_1">
                      <label for="opcion1_1">${element.choice2}</label>
                      <input type="checkbox" name="opcion1" id="opcion1_1">
                      <label for="opcion1_1">${element.choice3}</label>
                      <input type="checkbox" name="opcion1" id="opcion1_1">
                      <label for="opcion1_1">${element.choice4}</label>
                    </div>
                    </div>`;
                  
          
        
        }
        htmlStr += `<button id='enviar'>JUGAR</button>`;
        document.getElementById("juego").innerHTML=htmlStr;

        });
    
</script>
<script>

document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
});

</script>
</body>
</html>