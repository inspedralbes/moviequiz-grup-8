<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

//conectar a la BD
$conexion=mysqli_connect("labs.inspedrdalbes.cat","a18polpuipui_pol","Movie1234","user");
$consulta="SELECT * FROM login WHERE usuario='$username' and contraseña='$password'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);
if($filas>0){
	header("location:index.php");
}

else {?>

  		<div class="alert alert-warning">
      		<strong>Error al guardar los datos</strong> 
      		<a href="login.php" class="alert-link">Volver</a>
      	</div>  <? } 
mysqli_free_result($resultado);
mysqli_close($conexion);