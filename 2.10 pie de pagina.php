<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Pie de página</title>
</head>
<style>
    #footer-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  background-color: #f0f0f0;
  padding: 20px;
  font-family: 'Poppins', sans-serif;
  color: #333;
}

#map {
  margin-bottom: 20px;
}

#rs {
  display: flex;
  flex-direction: column;
  align-items: center;
}

#social-media {
  margin-bottom: 20px;
}

#social-media > a {
  margin: 0 10px;
  text-decoration: none;
  font-size: 24px;
  color: #5e6e00;
  transition: color 0.3s;
}

#social-media a:hover {
  color: #8db600;
}

#menu-summary, #hours {
  margin: 10px 0;
}

#menu-summary > ul {
  list-style-type: none;
  padding: 0;
}

#menu-summary > ul > li {
  margin: 5px 0;
}

#menu-summary > ul > li > a {
  text-decoration: none;
  color: #5e6e00;
  transition: color 0.3s;
}

#menu-summary > ul > li > a:hover {
  color: #8db600;
}

#hours > p {
  margin: 5px 0;
  color: #777;
}

#footer-container > h2 {
  font-size: 1.5rem;
  margin-bottom: 15px;
  color: #d9e021;
}

#footer-container > p {
  margin: 5px 0;
}

#comentario {
  background-color: #ffffff;
  border: 3px solid #1b5c01;
  border-radius: 20px;
  padding: 4px;
  margin: 1px auto;
  max-width: 330px;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-decoration: solid;
}

h1 {
  color: #333333;
  font-size: 20px;
  margin-bottom: 10px;
  text-align: center;
}

label {
  display: block;
  margin-bottom: 1px;
  font-weight: bold;
}

textarea {
  width: 98%;
  -ms-flex-align: center;
  padding: 1px;
  border: 1px solid #ccc;
  border-radius: 8px;
  resize: none;
  margin-bottom: 1px;
  font-size: 14px;
}

input[type="submit"], input[type="reset"] {
  background-color: #015e01;
  color: white;
  border: none;
  border-radius: 8px;
  padding: 10px 15px;
  cursor: pointer;
  font-size: 14px;
  margin: 5px;
  transition: background-color 0.3s;
}

input[type="submit"]:hover, input[type="reset"]:hover {
  background-color: #218838;
}

@media (min-width: 768px) {
  #footer-container {
    flex-direction: row;
    justify-content: space-between;
    text-align: center;
    padding: 40px;
  }

  #map, #social-media, #menu-summary, #hours {
    flex: 1;
    margin: 0 20px;
  }
}

</style>
<body>
    <footer>
        <div id="footer-container">
            <div id="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13366.67520820834!2d-66.1347143!3d-17.3727946!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e3775e60c64087%3A0xef8ba0abdc212732!2sHuk%20Kallpalla!5e0!3m2!1ses!2sbo!4v1634608874621!5m2!1ses!2sbo"
                    width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div id="rs">
                <div id="social-media">

                    <a href="https://www.facebook.com/Hukallpalla.bo/" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/hukallpalla.bo/" target="_blank"><i
                            class="fab fa-instagram"></i></a>
                    <a href="https://wa.me/59170799627" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.tiktok.com/@hukallpalla.com?_t=8qGazpD1858&_r=1"><i
                            class="fa-brands fa-tiktok"></i>
                    </a>
                </div>

                    <div id="comentario">
                        <h1>Deja tu comentario</h1>
                        <form action="2.10.1 enviar.php" method="post">
                    <textarea id="sugerenchia" name="sugerenchia" cols="40" rows="5"></textarea>
                    <input type="submit" name="registro" value="enviar" />
                    </form>
                </div>

            </div>
            <div id="menu-summary">
                <h4>Menú</h4>
                <ul>
                    <li><a href="2.3 Huk Kallpalla.php">Inicio</a></li>
                    <li><a href="2.4 Nosotros.php">Acerca de</a></li>
                    <li><a href="2.10 Convenios.php">Convenios</a></li>
                    <li><a href="2.6 Catalogo.php">Servicios y Productos</a></li>
                    <li><a href="2.7 Ecocanje.php">Ecocanje</a></li>
                </ul>
            </div>

            <div id="hours">
                <h4>Horarios de Atención</h4>
                <p>Lunes a Viernes: 9:00 AM - 5:00 PM</p>
                <p>Sábado: 10:00 AM - 2:00 PM</p>
                <h4>Nuestro Gmail</h4>
                <p>Huk.kallpalla7@gmail.com</p>
            </div>
        </div>
    </footer>
</body>

</html>
