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

    #ecocanjito {
      height: 697px;
      background-image: url("imgen/fondo1.jpg");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: row;
      transition: all 0.3s ease;
    }

    #eco1,
    #eco2 {
      height: 400px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 10px;
      margin: 20px;
      border: 2px solid rgba(255, 255, 255, 0.5);
      border-radius: 15px;
      background-color: rgba(0, 0, 0, 0.5);
      transition: transform 0.3s ease, background-color 0.3s ease;
      animation: fadeIn 1s ease;
    }

    #eco1:hover,
    #eco2:hover {
      transform: scale(1.05) rotate(3deg);
      background-color: rgba(255, 255, 255, 0.2);
    }

    #imagen-compost1,
    #imagen-compost2 {
      width: auto;
      height: 200px;
      transition: transform 0.3s ease;
    }

    #imagen-compost1:hover,
    #imagen-compost2:hover {
      transform: scale(1.1);
    }

    #link1,
    #link2 {
      margin-top: 10px;
      font-size: 1.2rem;
      color: white;
      text-decoration: none;
      transition: font-size 0.3s ease, color 0.3s ease;
    }

    #link1:hover,
    #link2:hover {
      color: #A19F32;
      font-size: 1.3rem;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Media Queries para diseño responsivo */
    @media (max-width: 768px) {

      #link1,
      #link2 {
        font-size: 1rem;
      }

      #imagen-compost1,
      #imagen-compost2 {
        height: 150px;
      }
    }

    @media (max-width: 480px) {

      #link1,
      #link2 {
        font-size: 0.9rem;
      }

      #imagen-compost1,
      #imagen-compost2 {
        height: 120px;
      }

      #ecocanjito {
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }
    }
  </style>
</head>

<body id="principal">
  <?php require "2.1 Encabezado.php"; ?>
  <section id="ecocanjito">
    <div id="eco1">
      <img src="imgen/compost1.png" id="imagen-compost1" alt="Recojo de compost">
      <a href="2.8 Compost.php" id="link1">Recojo compost</a>
    </div>
    <div id="eco2">
      <img src="imgen/compost5.png" id="imagen-compost2" alt="Canjeo de monedas">
      <a href="2.9 Monedas.php" id="link2">Canjeo de monedas</a>
    </div>
  </section>
  <?php require "2.10 pie de pagina.php"; ?>
</body>

</html>