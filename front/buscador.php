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
    <!-- Iconos fuentes -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



    <title>Document</title>


</head>

<body class="#b39ddb deep-purple lighten-3">
    <?php
        require_once('header.php');
    ?>
    <!-- <nav>
        <div class="nav-wrapper">
            <form>
                <div class="input-field">
                    <input id="search" type="search" required>
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons">close</i>
                </div>
            </form>
        </div>
    </nav> -->
    <br><br><br>
    <input type="text" name="search" id="nombrePeli">
    <button id="buscar">BuscarPeli</button>
    <div class="row">
        <div id="resultado">




        </div>
    </div>
    <script>
    document.getElementById("buscar").addEventListener("click", function() {
        let busqueda = document.getElementById("nombrePeli").value;
        document.getElementById("nombrePeli").value = "";
        var url = `http://www.omdbapi.com/?apikey=58b1abc&s=${busqueda}`;

        fetch(url).then(res => res.json())
            .catch(error => console.error('Error:', error))
            .then(function(response) {
                console.log('Success:', response.Search);
                let d = response.Search;
                let htmlStr = "";

                for (let index = 0; index < d.length; index++) {
                    console.log(d[index].Title)
                    htmlStr += `
    <div class="col s2">
        <div class="card large">
        
            <div class="card-image">
            <a class="btn-floating halfway-fab waves-effect waves-light red" href="#modal1">+ info</a>
                <img src="${d[index].Poster}">
                
                <span class="card-title">${d[index].Title}</span>
                
            </div>
        
            <div class="card-content">
                <p>${d[index].Title}</p>
                <p>${d[index].Year}</p>
            </div>
        
        </div>
 
    <!-- Modal Structure -->
            <div id="modal1" class="modal">
                     <div class="modal-content">
                            <h4>Modal Header</h4>
                             <p>A bunch of text</p>
                     </div>
                    <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                    </div>
            </div>

    </div>

   
`
                }

                document.getElementById("resultado").innerHTML = htmlStr;

            });


    })
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        console.log('Modal afegit');
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems, {});
    });
    </script>
</body>

</html>