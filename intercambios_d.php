<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <h2>Eliminar registro de un recojo</h2>
        <?php
              include('db.php');
         
         $idEliminar= $_GET['id'];
         
         $consulta="DELETE FROM intercambio WHERE usuario_idusuario=$idEliminar;";
         
         $resultado_consulta=mysqli_query($conexion,$consulta);
         
         header('Location: ./3.5 Canje moneda.php');
        ?>
    </body>
</html>
