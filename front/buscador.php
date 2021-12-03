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
            
    <title>Document</title>
    <?php
        require_once('header.php');
    ?>
</head>
<body>
    
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
<div id="resultado"></div>
    <script>

    document.getElementById("buscar").addEventListener("click",function(){
        let busqueda=document.getElementById("nombrePeli").value;
        document.getElementById("nombrePeli").value="";
        var url=`http://www.omdbapi.com/?apikey=58b1abc&s=${busqueda}`;

            fetch(url).then(res => res.json())
            .catch(error => console.error('Error:', error))
            .then(function(response){
                             console.log('Success:', response.Search);
                            let d=response.Search;
                            let htmlStr="";

                            for (let index = 0; index < d.length; index++) {
                                console.log(d[index].Title)
                                htmlStr +=  `<div>
                                                <h3>${d[index].Title}</h3>
                                                <img src="${d[index].Poster}"
                                                </div>`    
                            }

                            document.getElementById("resultado").innerHTML=htmlStr;

                            });
            
            
        })
</script>
</body>
</html>