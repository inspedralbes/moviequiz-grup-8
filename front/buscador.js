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
           
    <a class="btn-floating halfway-fab waves-effect waves-light red" href="#modal1">+info</a>

            <img src="${d[index].Poster}" width="295px" height="450px">
            
            <span class="card-action">${d[index].Title}</span>
                 
    </div>


    <div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Lorem, ipsum dolor.</h4>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione?</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-light btn-flat modal-close">Aceptar</a>
    </div>
</div>

</div>


`
            }

            document.getElementById("resultado").innerHTML = htmlStr;
        });
})