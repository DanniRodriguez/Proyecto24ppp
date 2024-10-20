<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a2dd6045c4.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <title>Sesion</title>
</head>
<style>
  * {
  font-family: 'Poppins', sans-serif;
  margin: 0;
  padding: 0;
}

#ingreso {
  display: flex;
  height: 900px;
  justify-content: center;
  align-items: center;
  background-image: url("imgen/fondo1.jpg");
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  flex-direction: column;
}

#fondo {
  display: flex;
  width: 400px;
  height: 490px;
  background: transparent;
  border: 2px solid rgba(255, 255, 255, 0.5);
  border-radius: 20px;
  backdrop-filter: blur(20px);
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
  justify-content: center;
  align-items: center;
}
#fondo.active {
  width: 400px;
  height: 890px;
}

#contenedor-form {
  width: 300px;
  height: 445px;
  padding: 45px;
}

#contenedor-form h2 {
  font-size: 2em;
  color: #ffffff;
  text-align: center;
}

#contenedor-input {
  position: relative;
  width: 100%; 
  height: 60px;
  border-bottom: 2px solid #ffffff;
  margin: 30px 0;
}
#usrname-error.error{
  color: #778c43;
padding-top:100px;
}
#correo_usuario-error.error{
  color: #778c43;
padding-top:90px;
}
#contrasenia_usuario-error.error{
  color: #778c43;
padding-top:100px;
}

#contenedor-input label {
  position: absolute;
  top: 50%;
  left: 7px;
  transform: translateY(-50%);
  font-size: 1em;
  font-weight: 200;
  pointer-events: none;
  transition: 0.4s;
  color: #ffffff;
}

#contenedor-input input:focus ~ label, 
#contenedor-input input:valid ~ label {
  top: 0px;
}

#contenedor-input input {
  width: 100%;
  height: 100%; 
  background: transparent;
  border: none;
  outline: none;
  font-size: 1em;
  color: #ffffff;
  padding: 0 35px 0 5px;
}

#contenedor-input .icono {
  position: absolute;
  right: 18px;
  font-size: 1.4em;
  color: #F1EFEF;
  line-height: 57px;
}

#recordar {
  font-size: 0.6em;
  margin: -14px 5% 10px;
  display: flex;
  justify-content: space-between;
  font-weight: 600;
}

#recordar label input {
  accent-color: #090f1d;
  margin-right: 3px;
}

#recordar a {
  color: #ffffff;
  margin: 1px 5% 0.5px;
  text-decoration: none;
}

#recordar a:hover {
  text-decoration: underline;
}

.btn{
    width: 100%;
    height: 40px;
    border: none;
    outline: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
    font-weight: bold;
    background-color: #000000;
    color: #F1EFEF;
  }
  

#registrar {
  font-size: 0.9em;
  color: #F1EFEF;
  text-align: center;
  margin: 25px 0 10px;
}

#registrar p a {
  color: #F1EFEF;
  text-decoration: none;
}

#registrar p a:hover {
  text-decoration: underline;
  text-decoration-color: #ffffff;
  text-decoration-thickness: 2px;
  text-underline-offset: 4px;
}
/* Media Queries */
@media (max-width: 768px) {
            #contenedor-form h2 {
                font-size: 1.5em;
            }
    
            .btn {
                font-size: 0.9em;
            }
        }
@media (max-width: 480px) {
            #contenedor-form h2 {
                font-size: 1.3em;
            }

            .btn {
                height: 35px;
                font-size: 0.8em;
            }

            #registrar {
                font-size: 0.8em;
            }
        }
</style>
<body id="principal">
<?php
    require "1.1 Encabezado.php"; 
?>
<section id="ingreso">
  <div id="fondo">
    <div id="contenedor-form" class="login">
      <h2>Iniciar Sesión</h2>
      <form  action="1.2.4 Sesion.php"  method="POST">
        <div id="contenedor-input">
          <span class="icono"><i class="fa-solid fa-user"></i></span>
          <input type="text" required name="usrname" >
          <label for="text">Nombre de Usuario</label>
        </div>
        <div id="contenedor-input">
          <span class="icono"><i class="fa-solid fa-envelope"></i></span>
          <input type="email" required name="correo_usuario">
          <label for="email">Email</label>
        </div>
        <div id="contenedor-input">
          <span class="icono"><i class="fa-solid fa-lock"></i></span>
          <input type="password" required name="contrasenia_usuario">
          <label for="password">Contraseña</label> 
        </div>
        <button type="submit" class="btn">Iniciar Sesión</button>
        <div id="registrar">
          <p>¿No tienes cuenta? <a href="1.2.1 Registrarusr.php" class="registrar-link">Registrarse</a></p>
        </div>
      </form>
    </div>
    <script>
       $("form").validate({
  rules:{
    usrname:{
          required:true,
          minlength:5,
          maxlength:25
      },
      correo_usuario:{
          required:true,
          email: true
      },
      contrasenia_usuario:{
          required:true
      }
  },
  messages:{
    usrname:{
      required:"este campo tiene que ser llenado.",
      minlength:"el minimo de letras es 5.",
      maxlength:"el maximo de letras es 25."
  },
  correo_usuario:{
      required:"este campo tiene que ser llenado.",
      email:"El campo debe tener formato de email."
  },
  contrasenia_usuario:{
      required:"este campo tiene que ser llenado."
  }
  }
 }
 )
      </script>
</section>
<?php
    require "1.7 pie de pagina.php";
?>
</body>
</html>
