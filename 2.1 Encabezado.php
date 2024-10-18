<!DOCTYPE html>
<html lang="es">
<?php
require "db.php";
$usrname=$_SESSION['usrname'];
$initial = strtoupper(substr($usrname, 0, 1)); // Extrae la inicial y la convierte a mayúscula

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

        header {
            padding: 20px 50px;
            background-color: #ffffff;
            color: #000000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #contenedor-logo,
        #contenedor-menu {
            display: flex;
            align-items: center;
        }

        #logo>img {
            width: 200px;
            margin-right: 10px;
        }

        #menu {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        #enlaces {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .enlaces {
            color: #000000;
            padding: 0 10px;
            transition: color 0.4s;
        }

        #mostrar-menu,
        #esconder-menu {
            font-size: 30px;
            cursor: pointer;
            display: none;
            transition: color 0.4s;
        }

        #menu .enlaces:hover,
        #mostrar-menu:hover,
        #esconder-menu:hover {
            color: #bacb00;
        }

        #check {
            display: none;
        }

        #icono {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #bacb00;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 20px;
            transition: opacity 0.4s ease-in-out, transform 0.4s ease-in-out;
        }

        #icono a {
            color: white;
            font-weight: bold;
            font-size: 20px;
        }

        /* Responsividad */
        @media (max-width: 800px) {

            #mostrar-menu,
            #esconder-menu {
                display: block;
            }

            #menu {
                position: fixed;
                width: 250px;
                height: 100vh;
                background-color: #f0f0f0;
                right: -250px;
                top: 0;
                padding: 100px 0;
                transition: right 0.5s ease-in-out;
            }

            #menu .enlaces {
                display: block;
                padding: 10px;
                color: #000000;
                width: 100%;
                opacity: 0;
                transition: opacity 0.5s ease-in-out;
            }

            #esconder-menu {
                position: absolute;
                top: 40px;
                right: 40px;
            }

            #check:checked~#menu {
                right: 0;
            }

            #check:checked~#menu .enlaces {
                opacity: 1;
            }

            #check:checked~#icono {
                opacity: 0;
                transform: scale(0.5);
                pointer-events: none;
            }
        }
    </style>
</head>

<body>
    <header>
        <a href="2.3 Huk Kallpalla.php" class="enlaces">
            <div id="contenedor-logo">
                <div id="logo">
                    <img src="imgen/logo.png" alt="Logo">
                </div>
            </div>
        </a>
        <div id="contenedor-menu">
            <input type="checkbox" id="check">
            <label for="check" id="mostrar-menu">&#8801;</label>
            <nav id="menu">
                <div id="enlaces">
                    <a href="2.3 Huk Kallpalla.php" class="enlaces">Inicio</a>
                    <a href="2.4 Nosotros.php" class="enlaces">Acerca de</a>
                    <a href="2.5 Convenios.php" class="enlaces">Convenios</a>
                    <a href="2.6 Catalogo.php" class="enlaces">Servicios y Productos</a>
                    <a href="2.7 Ecocanje.php" class="enlaces">Ecocanje</a>
                </div>
                <label for="check" id="esconder-menu">&#215;</label>
            </nav>
            <div id="icono">
            <a href="2.2 perfil.php"><?php echo $initial;?></a> <!-- Muestra la inicial del usuario -->
            </div>
        </div>
    </header>
</body>

</html>