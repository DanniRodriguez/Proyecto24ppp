<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a2dd6045c4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="2.1 sesion.css">
    <title>Document</title>
</head>
<body id="principal">
<?php
    require "1 Encabezado.php";
    ?>
<section id="ingreso">
<div class="fondo">
<span class="icono-cerrar"><i class="fa-solid fa-xmark"></i></span>
 <div class="contenedor-form login">
    <h2>Iniciar Sesion</h2>
    <form action="#">
      <div class="contenedor-input">
        <span class="icono"><i class="fa-solid fa-envelope"></i></span>
        <input type="email" required>
        <label for="#">Email</label>
      </div>
      <div class="contenedor-input">
        <span class="icono"><i class="fa-solid fa-lock"></i></span>
        <input type="password" required>
        <label for="#">Contraseña</label>
      </div>
        <div class="recordar">
        <label for="#"><input type="checkbox">Recordar Sesion</label>
        <a href="#">¿Olvidaste tu contraseña?</a >
        </div>
        <button type="submit" class="btn">Iniciar Sesion</button>
        <div class="registrar">
        <p>¿No tienes cuenta? <a href="#" class="registrar-link">Registrarse</a></p>
        </div>
       </form>
     </div>
    <div class="contenedor-form registrar"> 
        <h2>Registrarse</h2>
      <form action="#">
        <div class="contenedor-input">
          <span class="icono"><i class="fa-solid fa-user"></i></span>
          <input type="text" required>
               <label for="#">Nombre de Usuario</label>
        </div>
        <div class="contenedor-input">
          <span class="icono"><i class="fa-solid fa-envelope"></i></span>
          <input type="email" required>
               <label for="#">Email</label>
        </div>
        <div class="contenedor-input">
          <span class="icono"><i class="fa-solid fa-lock"></i></span>
          <input type="password" required>
               <label for="#">Contraseña</label>
        </div>

     <div class="recordar">
        <label for="#"> <input type="checkbox">Acepto los Terminos y Condiciones </label>
     </div>
         <button type="submit" class="btn">Registrarme</button>
      
        <div class="registrar">
            <p>¿Tienes una cuenta?<a href="#" class="login-link">Iniciar Sesion</a></p>
         </div>
      </form>
     </div>
  </div>
  <script src="script.js"></script>
</section>
<?php
    require "7 pie de pagina.php";
    ?>
</body>
</html>