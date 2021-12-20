<?php

    session_start();

    if (isset($_SESSION['logeado'])){
        header('Location: hidden.php');
        exit();
    }

    if (isset($_POST['login'])){
        $connection = new mysqli("labs.inspedralbes.cat", "a18polpuipui_pol", "Movie1234", "a18polpuipui_movie");
        $username = $connection->real_escape_string( $_POST['usernamePhp']);
        $password = $connection->real_escape_string( $_POST['passwordPhp']);

        $sql = "SELECT id, username, password FROM users WHERE username='$username'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);

        $data = $connection->query(query:"SELECT id FROM users WHERE username='$username'");
        if ($data->num_rows>0){
            if(password_verify($password, $row["password"])){
            $_SESSION['logeado']='1';
            $_SESSION['username']=$username;
 
            exit('OK');
            }
        } else {
       
            exit('NO');
        }

    }
?>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<form class="col s9" method="post" action="login.php">
    <div class="row">
        <div id="areaLogin">
            <div class="input-field col s3">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_prefix" type="text" class="validate" name="username">
                <label for="icon_prefix">Username</label>
            </div>
            <div class="input-field col s3">
                <i class="material-icons prefix">vpn_key</i>
                <input id="icon_telephone" type="password" class="validate" name="password">
                <label for="icon_telephone">Password</label>
            </div>
            <div class="input-field col s3">
                <button class="btn waves-effect waves-light" type="button" id="login" name="login">LOGIN</button>
            </div>
            <div class="input-field col s3">
                <a class="waves-effect waves-light btn-small" href="registro.php">Registre</a>
            </div>
        </div>
    </div>
</form>
<div class="row">
    <div id="areaLogout" class="oculta">
        <div class="col s6">
            <img width="75px" src="https://randomuser.me/api/portraits/men/25.jpg" />
        </div>
        <div class="col s6">
            <a href="logout.php" id="logout" class="waves-effect waves-light btn">SALIR</a>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function() {
    console.log('pagina lista');
    $("#login").on('click', function() {
        var username = $("#icon_prefix").val();
        var password = $("#icon_telephone").val();

        if (username == "" || password == "")
            alert('Algun campo esta vacio');
        else {

            $.ajax({
                    url: 'login.php',
                    method: 'POST',
                    data: {
                        login: 1,
                        usernamePhp: username,
                        passwordPhp: password
                    },
                    success: function(response) {
                        console.log(response);
                        if (response == 'OK') {
                            document.getElementById("areaIndex").classList.add("oculta");
                            document.getElementById("areaLogin").classList.add("oculta");
                            document.getElementById("areaLogout").classList.remove("oculta");
                            document.getElementById("areaBuscar").classList.remove("oculta");

                        } else {
                            alert("Nombre de usuario o contraseña incorrecta");
                        }
                    },
                    dataType: 'text'
                }


            );
        }
    });
});
</script>