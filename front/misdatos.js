document.getElementById("misDatos").addEventListener("click",function(){

    let usuario = document.getElementById("username").value;
    const datosEnvio = new FormData();
        datosEnvio.append('user', usuario);
    fetch(`./php/usuario.php`, {

        method: 'POST',

        body: datosEnvio

    }).then(response => response.json()).then(data => {
        console.log(data);
    let htmlStr="";
    htmlStr+=`
        <img src="${data.imagen}"  width="100">
        <h5>Usuario: ${data.nombre}</h5>
    `;
    document.getElementById("DatosPersonales").innerHTML = htmlStr;
    });
});