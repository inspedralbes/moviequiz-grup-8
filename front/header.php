<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body class="#b39ddb deep-purple lighten-3">
    <div class="navbar-fixed">

        <nav class="#9575cd deep-purple lighten-2">
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo"><img src="img/logo.png" width="200px"></a>
                <div class="right hide-on-med-and-down">
                    <form class="col s9">
                        <div class="row">
                            <?php
        require_once('login.php');
    ?>
                            <div class="input-field col s3">
                                <a class="waves-effect waves-light btn-small" href="registro.php">Registre</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </nav>


        <script>
        let u = document.getElementById("username").value;

        let p = document.getElementById("pwd").value;



        const datosEnvio = new FormData();

        datosEnvio.append('username', u);

        datosEnvio.append('pwd', p);



        fetch(`login.php`, {

                method: 'POST',

                body: datosEnvio

            })

            .then(response => response.json())

            .then(data => {

                console.log(data);

            });
        </script>
</body>

</html>