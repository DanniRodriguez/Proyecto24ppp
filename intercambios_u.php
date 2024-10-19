<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>       
        <?php

require "3.1 Encabezado.php";

echo"<h2>Actualizar un intercambio</h2><br><br>";

         include('db.php');

        $idModificar= $_GET['id'];
        $consulta = "SELECT * FROM intercambio WHERE usuario_idusuario = $idModificar;";
        $resultado_consulta =mysqli_query($conexion,$consulta);
        $registro = mysqli_fetch_array ($resultado_consulta);
        
        ?>
        <form method="POST" action="update intercambios.php">
            
           Fecha del intercambio:
           <input type="hidden" name="id" value="<?php $registro['usuario_idusuario'];?>">  
           <input type="date" name="fecha" value="<?php $registro['fecha']?>"><br><br>
           Cantidad del intercambio:
           <input type="number" name="cant" value="<?php echo 'cantidad:'. $registro['cantidad']?>"><br><br>
           Producto:
           <input type="number" name="product" value="<?php echo 'id:'. $registro['producto_idproducto']?>"><br><br>
           <input type="submit" value="Guardar registro">
        </form>
         <?php
         require "3.7 pie de pagina.php";
        ?>
    </body>
</html>
