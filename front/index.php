<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Quiz</title>
    <?php
        require_once('header.php');
    ?>
</head>

<body>
<form action="buscador.php" method="POST">
<input type="text" id="keywords" name="keywords" size="30" maxlength="30" >
<input type="submit" name="search" id="search" value="Buscar">
</form>
</body>

</html>