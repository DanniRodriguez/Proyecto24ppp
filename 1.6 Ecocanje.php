<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EcoCanje</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      text-decoration: none;
      box-sizing: border-box;
    }

    #inicio {
      height: 100vh;
      background-image: url("imgen/fondo1.jpg");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
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

    #titulo-inicio {
      font-size: 7vh;
      color: white;
    }

    #descripcion {
      font-size: 4vh;
      margin-top: 10px;
      color: white;
    }

    #registro {
      height: 50px;
      padding: 10px;
      border-radius: 50px;
      background-color: rgba(0, 0, 0, 0.62);
      display: flex;
      align-items: center;
      justify-content: center;
      transition: 0.4s;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
    }

    #registro:hover {
      box-shadow: 0 0 25px #ffffff;
      transform: scale(1.05);
    }

    #enlace-registro {
      font-weight: bold;
      font-size: 1.6rem;
      color: rgb(255, 255, 255);
      transition: 0.3s;
    }

    #enlace-registro:hover {
      text-shadow: 0 0 5px #ffffff, 0 0 10px #ffffff;
    }

    /* Media Queries para diseño responsivo */
    @media (max-width: 768px) {
      #titulo-inicio {
        font-size: 6vh;
      }

      #descripcion {
        font-size: 3.5vh;
      }

      #registro {
        min-width: 120px;
        height: 45px;
      }

      #enlace-registro {
        font-size: 1.4rem;
      }
    }

    @media (max-width: 480px) {
      #titulo-inicio {
        font-size: 5vh;
      }

      #descripcion {
        font-size: 3vh;
      }

      #registro {
        min-width: 100px;
        height: 40px;
      }

      #enlace-registro {
        font-size: 1.2rem;
      }
    }
  </style>
</head>

<body id="principal">
  <?php require "1.1 Encabezado.php"; ?>
  <section id="inicio">
    <div id="textos">
      <h1 id="titulo-inicio">Huk Kallpalla</h1>
      <p id="descripcion">Regístrate o inicia sesión para acceder a esta función</p>
    </div>
    <div id="registro">
      <a href="1.2.1 sesion.php" id="enlace-registro">Quiero unirme</a>
    </div>
  </section>
  <?php require "1.7 pie de pagina.php"; ?>
</body>

</html>