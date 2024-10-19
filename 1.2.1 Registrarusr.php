<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a2dd6045c4.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <title>Registrarme</title>
</head>
<style>
  * {
  font-family: 'Poppins', sans-serif;
  margin: 0;
  padding: 0;
}

#ingreso {
  display: flex;
  height: 1350px;
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
  height: 1250px;
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
  width: 600px;
  height: auto; 
  padding: 45px;
}
    
#contenedor-form.registrar {
  width: 330px;
  height: 1199px;
  position: absolute;
  transition: none;
  transform: translateX(0px);
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
#ci-error.error{
  color: #778c43;
padding-top:100px;
}
#direccion-error.error{
  color: #778c43;
padding-top:100px;
}
#telefono-error.error{
  color: #778c43;
padding-top:92px;
}
#nombres-error.error{
  color: #778c43;
padding-top:92px;
}
#ap_p-error.error{
  color: #778c43;
padding-top:92px;
}
#ap_m-error.error{
  color: #778c43;
padding-top:92px;
}
#usrname-error.error{
  color: #778c43;
padding-top:92px;
}
#fecha_n-error.error{
  color: #778c43;
padding-top:92px;
}
#correo_usuario-error.error{
  color: #778c43;
padding-top:92px;
}
#contrasenia_usuario-error.error{
  color: #778c43;
padding-top:92px;
}
#confirmacion-error.error{
  color: #778c43;
padding-top:92px;
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
  right: 17px;
  font-size: 1.4em;
  color: #F1EFEF;
  line-height: 57px;
}
    
.btn{
    width: 100%;
    height: 30px;
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

@media (max-width: 768px) {
            #contenedor-form {
                padding: 20px;
            }

            #contenedor-form h2 {
                font-size: 1.5em;
            }
        }

        @media (max-width: 480px) {
            #fondo {
                padding: 10px; }
            }

            #contenedor-form h2 {
                font-size: 1.2em; 
            }

            .btn {
                height: 35px; 
            }
</style>
<body id="principal">
<?php
    require "1.1 Encabezado.php"; 
?>
<section id="ingreso">
  <div id="fondo">
<div id="contenedor-form" class="registrar"> 
  <h2>Registrarse</h2>
  <form  method="POST" action="1.1.2 Registrarusr.php">
      <div id="registrar">
      <p>¿Tienes una cuenta? <a href="1.2.3 Sesion.php" class="login-link">Iniciar Sesión</a></p> 
    </div>
  <div id="contenedor-input">
      <span class="icono"><i class="fa-solid fa-globe"></i></span>
      <input type="text" required name="ci">
      <label for="ci">Carnet de Identidad</label>
    </div>
    <div id="contenedor-input">
      <span class="icono"><i class="fa-solid fa-user fa-bounce"></i></span>
      <input type="text" required name="nombres" >
      <label for="text">Nombre(s)</label>
    </div>
    <div id="contenedor-input">
      <span class="icono"><i class="fa-regular fa-user"></i></span>
      <input type="text" required name="ap_p">
      <label for="text">Apellido Paterno</label> 
    </div>  
    <div id="contenedor-input">
      <span class="icono"><i class="fa-regular fa-user"></i></span>
      <input type="text" required name="ap_m">
      <label for="text">Apellido Materno</label> 
    </div>  
    <div id="contenedor-input">
      <span class="icono"><i class="fa-solid fa-user fa-shake"></i></span>
      <input type="text" required name="usrname">
      <label for="username">Nombre de usuario</label>
    </div>
    <div id="contenedor-input">
      <span class="icono"><i class="fa-solid fa-phone"></i></span>
      <input type="text" required name="telefono" pattern="[0-9]">
      <label for="number">Teléfono</label> 
    </div>  
    <div id="contenedor-input">
      <span class="icono"><i class="fa-solid fa-envelope"></i></span>
      <input type="text" required name="correo_usuario">
      <label for="email">Correo electronico</label>
    </div>
    
    <div id="contenedor-input">
      <span class="icono"><i class="fa-solid fa-location-dot"></i></span>
      <input type="text" required name="direccion">
      <label for="direccion">Dirección</label> 
    </div>   
    <div id="contenedor-input">
    <span class="icono"><i class="fa-solid fa-calendar"></i></span>
    <input type="date" required name="fecha_n">
    <label for="date"></label>
    </div>
    <div id="contenedor-input">
      <span class="icono"><i class="fa-solid fa-lock"></i></span>
      <input type="password" required name="contrasenia_usuario">
      <label for="password">Contraseña</label> 
    </div>
    <div id="contenedor-input">
      <span class="icono"><i class="fa-solid fa-lock"></i></span>
      <input type="password" required name="confirmacion">
      <label for="password">Confirmar Contraseña</label> 
    </div>
    <button type="submit" class="btn">Registrarme</button>
    <br>
  </form>
</div>
 
  <script type="text/javascript">
    function validarPasswords(){
  var pass = document.getElementById("contrasenia_usuario").value;
  var repass = document.getElementById("confirmacion").value;

    if (pass!=repass) 
    {
        alert("Las Contraseñas no Coinciden");
    }
    else
    {
        document.getElementById("form_usuario").submit();
    }
}

        $("form").validate({
  rules:{
      ci:{
          required:true,
          number:true,
          maxlength:8
      },
      nombres:{
          required:true
      },
      ap_p:{
          required:true
      },
      ap_m:{
          required:true
      },
      usrname:{
          required:true
      },
      telefono:{
          required:true,
          number: true,
          maxlength:10
      },
      correo_usuario:{
          required:true,
          email:true
      },
      direccion:{
          required:true,
          minlength:5,
          maxlength:50
      },
      fecha_n:{
          required:true
      },
      contrasenia_usuario:{
          required:true
      },
      confirmacion:{
          required:true
      }
  },
  messages:{
  ci:{
      required:"este campo no puede estar vacio.",
      number:"Ingrese su CI como un valor numérico",
      maxlength:"el maximo de numéros es 8."
  },
  nombres:{
      required:"este campo no puede estar vacio."
  },
  ap_p:{
      required:"este campo no puede estar vacio."
  },
  ap_m:{
      required:"este campo no puede estar vacio."
  },
  usrname:{
      required:"este campo no puede estar vacio."
  },
  telefono:{
      required:"este campo no puede estar vacio.",
      number:"Ingrese su telefono como un valor numérico.",
      maxlength:"el maximo de números es 10."
  },
  correo_usuario:{
      required:"este campo no puede estar vacio.",
      email:"El campo debe tener formato de email."
  },
  direccion:{
      required:"este campo no puede estar vacio.",
      minlength:"el mínimo de letras es 5.",
      maxlength:"el maximo de letras es 50."
  },
  fecha_n:{
      required:"este campo no puede estar vacio.",
  },
  contrasenia_usuario:{
      required:"este campo no puede estar vacio."
      },
  confirmacion:{
      required:"este campo no puede estar vacio."
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
