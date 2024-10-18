<!DOCTYPE html>
<html lang="en">
<?php
require "db.php";
session_start();
$usrname=$_SESSION['usrname'];

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Huk Kallpalla</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      text-decoration: none;
      box-sizing: border-box;
    }

    #inicio {
      height: 697px;
      background-image: url("imgen/fondo1.jpg");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      grid-area: sec1;
    }

    #textos {
      display: flex;
      color: rgb(255, 255, 255);
      font-weight: 600;
      padding: 20px;
      align-items: center;
      flex-direction: column;
      text-align: center;
    }

    #textos>h1 {
      font-size: 7vh;
      color: white;
    }

    #textos>p {
      font-size: 4vh;
    }

    /* Media Queries para diseño responsivo */
    @media (max-width: 768px) {
      #textos>h1 {
        font-size: 6vh;
      }

      #textos>p {
        font-size: 3.5vh;
      }

    }

    @media (max-width: 480px) {
      #textos>h1 {
        font-size: 5vh;
      }

      #textos>p {
        font-size: 3vh;
      }
    }
  </style>
</head>
<?php
    require "2.1 Encabezado.php"; 
echo"<body id='principal'>";
  echo"<section id='inicio'>";
     echo"<div id='textos'>";
       echo"<h1>Huk Kallpalla</h1>";
       echo"<p>De vuelta a la tierra</p>";
       echo"<p>Bienvenid@ $usrname</p>";
     echo"</div>";
   echo"</section>";
 echo"</body>";
    require "2.10 pie de pagina.php";
    ?>

</html>