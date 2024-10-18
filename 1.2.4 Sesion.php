<?php
include('db.php');
session_start();

$usrname=$_POST['usrname'];
$correo_usuario=$_POST['correo_usuario'];
$contrasenia_usuario=$_POST['contrasenia_usuario'];
$_SESSION['usrname']=$usrname;


$consulta1 = "SELECT idusuario from usuario where usrname='$usrname'and correo_usuario='$correo_usuario' and contrasenia='$contrasenia_usuario';";
$resultID =mysqli_query($conexion,$consulta1);  //consulta
$resultadoFILA = mysqli_fetch_assoc($resultID);     // con el fetch_assoc guardar la fila de la consulta en un arreglo
$ID = $resultadoFILA['idusuario'];  // agarrar el idusuario de el arreglo de resultadofila
$consulta2 = "SELECT rol from info_usuario where usuario_idusuario = '$ID' ;";
$resultadoROL =  mysqli_query($conexion,$consulta2);
$resultROL = mysqli_fetch_assoc($resultadoROL);
$rol = $resultROL['rol'];
$filas = mysqli_num_rows($resultado);

//echo "<p>$rol</p>";

if($rol == '2'){  
    header("location:2.3 Huk Kallpalla.php");

}else if($rol == '3'){
    header("location:3.2 Huk Kallpalla.php");
}else{
    header("location:1.2.3 Sesion.php");
}
    ?>
    <?php
    include("sesion.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php

mysqli_free_result($resultado);
mysqli_close($conexion);