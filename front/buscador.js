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
                        <a class="btn-floating halfway-fab waves-effect waves-light modal-trigger red" href="#modal${index}">+info</a>
                                <img src="${d[index].Poster}" width="295px" height="450px">
                                <span class="card-action">${d[index].Title}</span>   
                        </div>


                        <div id="modal${index}" class="modal">
                        <div class="modal-content">
                        <center>
                        <form method="post">
                            <h3>${d[index].Title}</h3>
                            <h5>Valoracion</h5>
                                <div>
                                    <label>
                                        <input name"Favorito" type="checkbox"/>
                                        <span>Marcar como favorito</span>
                                    </label>
                                </div>
                                <div>
                                    <br>
                                    <label>
                                        <input name="group1" type="radio" value="1"/>
                                        <span>1</span>
                                    </label>
                                    <label>
                                        <input name="group1" type="radio" value="3"/>
                                        <span>2</span>
                                    </label>
                                    <label>
                                        <input name="group1" type="radio" value="4"/>
                                        <span>3</span>
                                    </label>
                                    <label>
                                        <input name="group1" type="radio" value="5"/>
                                        <span>4</span>
                                    </label>
                                    <label>
                                        <input name="group1" type="radio" value="6"/>
                                        <span>5</span>
                                    </label>
                                </div>
                                <div class"input-field">
                                    <label for="comentario">Comentario<label>
                                    <textarea id="comentario" class="materialize-textarea" data-length="150"></textarea> 
                                </div>
                                <div>
                                    <a id="valoracion" class="waves-effect waves-light btn #1e88e5 blue darken-1">Guardar</a>
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
            var instances = M.Modal.init(elems,{});
        });
})