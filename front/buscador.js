document.getElementById("buscar").addEventListener("click", function () {
    let busqueda = document.getElementById("nombrePeli").value;
    document.getElementById("nombrePeli").value = "";
    var url = `http://www.omdbapi.com/?apikey=58b1abc&s=${busqueda}`;

    fetch(url).then(res => res.json())
        .catch(error => console.error('Error:', error))
        .then(function (response) {
            console.log('Success:', response.Search);
            let d = response.Search;
            let htmlStr = "";

            for (let index = 0; index < d.length; index++) {
                console.log(d[index].Title)
                htmlStr += `
                    <div class="col s2">
                        <div class="card large">
                        <a class="btn-floating halfway-fab waves-effect waves-light modal-trigger red add" href="#modal${index}">+info</a>
                                <img src="${d[index].Poster}" name="poster" id="poster" width="295px" height="450px">
                                <span class="card-action">${d[index].Title}</span>   
                        </div>


                        <div id="modal${index}" class="modal">
                        <div class="modal-content">
                        <center>
                        <form method="post">
                        <h3 name="titulo" id="titulo${index}" class="titol-peli">${d[index].Title} (${d[index].Year})</h3>
                        <h5>Valoracion</h5>
                            <div>
                                <label>
                                    <input name="Favorito" id="favorito" type="checkbox"/>
                                    <span>Marcar como favorito!</span>
                                </label>
                            </div>
                            <div>
                                <br>
                                <label>
                                    <input name="valoracion" id="valoracion" type="radio" value="1"/>
                                    <span>1</span>
                                </label>
                                <label>
                                    <input name="valoracion" id="valoracion" type="radio" value="2"/>
                                    <span>2</span>
                                </label>
                                <label>
                                    <input name="valoracion" id="valoracion" type="radio" value="3"/>
                                    <span>3</span>
                                </label>
                                <label>
                                    <input name="valoracion" id="valoracion" type="radio" value="4"/>
                                    <span>4</span>
                                </label>
                                <label>
                                    <input name="valoracion" id="valoracion" type="radio" value="5"/>
                                    <span>5</span>
                                </label>
                            </div>
                            <div class"input-field">
                                <label for="comentario">Comentario<label>
                                <textarea id="comentario${index}" name="comentario" class="text-coment materialize-textarea" data-length="150"></textarea> 
                            </div>
                            <div>
                                <a id="guardar${index}" class="btn-guardar waves-effect waves-light btn #1e88e5 blue darken-1" name="guardar" >Guardar</a>
                            </div>
                            </center>
                            </div>
                            <div class="modal-footer">
                                <a href="#" class="waves-effect waves-light btn-flat modal-close">Aceptar</a>
                            </div>


                        </form>
                        </div>

                    </div>


                    `;
            }

            document.getElementById("resultado").innerHTML = htmlStr;
            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems, {});


            document.getElementById("resultado").addEventListener("click",function(e){

                console.log(e.target);

                if (e.target.classList.contains("btn-guardar")){


                console.log(e.target.parentNode.parentNode);
                console.log(e.target.parentNode.parentNode.querySelector("[name='Favorito']").value);
                console.log(e.target.parentNode.parentNode.querySelector("[name='valoracion']").value);
                console.log(e.target.parentNode.parentNode.querySelector("[name='comentario']").value);
                console.log(e.target.parentNode.parentNode.querySelector("[name='titulo']") );

    //        $(".btn-guardar").on('click', function () {
                
                let comentario = e.target.parentNode.parentNode.querySelector("[name='comentario']").value;
                let favorito = e.target.parentNode.parentNode.querySelector("[name='Favorito']").value;
                let valoracion = e.target.parentNode.parentNode.querySelector("[name='valoracion']").value;

                

        
        
                if (comentario == "")
                    alert('error');
                else {
        
                    $.ajax({
                        url: '../back/registrarValoracion.php',
                        method: 'POST',
                        data: {
                            pelicula: 1,
                            favoritoPhp: favorito,
                            valoracionPhp: valoracion,
                            comentarioPhp: comentario,
        
                        },
                        dataType: 'text'
                    }
        
        
                    );
                }
            };
        })
        });
})

