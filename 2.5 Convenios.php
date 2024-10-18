<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="2.5.css" rel="stylesheet" type="text/css" />
    <title>Convenios e Intercambios</title>
</head>
<style>
    * { 
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    text-decoration: none;
    box-sizing: border-box;
}

#Convenios {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

#Convenios>h1 {
    font-size: 2.5em;
    margin-bottom: 20px;
    color: #6b0ddf;
    transition: color 0.3s ease;
}

#marcas {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

#marcas>.marq {
    margin: 20px;
    overflow: hidden;
    border-radius: 50%;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

#marcas>.marq:hover {
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
}

#marcas>.marq img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.marq:hover img {
    transform: scale(1.1);
}

#coproductos {
    padding: 20px;
    text-align: center;
}

#coinpro {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 15px;
}

.inproco {
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
    width: 200px;
    text-align: center;
}

.inproco:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.inproco img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.inproco h2 {
    margin: 15px 0;
    font-size: 1.5em;
    color: #DFDD0C;
}

#registrar {
    margin-top: 30px;
    text-align: center;
}

#registrar a {
    padding: 10px 20px;
    background-color: #6b0ddf;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

#registrar a:hover {
    background-color: #5D378C;
}
</style>
<body>
    <?php
    require "2.1 Encabezado.php";
?>
    <section id="Convenios">
        <div id="conveniostitulo">
            <h1>CONVENIOS</h1>
        </div>
        <div id="marcas">
            <div class="marq">
                <a href="https://www.agrecolandes.org/">
                    <img src="imgen/emconv1.jpg" alt="AGRECOL">

                </a>
            </div>
            <div class="marq">
                <a href="https://fam.org.bo/">
                    <img src="imgen/emconv2.jpg" alt="FAM">

                </a>
            </div>
            <div class="marq">
                <a href="https://www.cochabamba.bo/">
                    <img src="imgen/emconv3.png" alt="GAMC">

                </a>
            </div>
            <div class="marq">
                <a href="https://www.facebook.com/campinglaguna/">
                    <img src="imgen/emconv4.png" alt="LAGUNA CLAMPING">

                </a>
            </div>
            <div class="marq">
                <a href="https://www.univalle.edu/">
                    <img src="imgen/emconv5.png" alt="UNIVALLE">

                </a>
            </div>
        </div>
        </div>
        <div id="coproductos">
            <div id="conveniostitulo">
                <h1>PRODUCTOS</h1>
            </div>
            <div id="coinpro">
                <div class="inproco">
                    <img src="imgen/produin 1.png" alt="cuadernos">

                    <h2>CUADERNOS</h2>
                </div>

                <div class="inproco">
                    <img src="imgen/produin 2.png" alt="guantes">
                    <h2>GUANTES</h2>
                </div>
                <div class="inproco">
                    <img src="imgen/produin 3.png" alt="polera">
                    <h2>POLERA</h2>
                </div>
                <div class="inproco">
                    <img src="imgen/produin 4.png" alt="chaleco">
                    <h2>CHALECO</h2>
                </div>
                <div class="inproco">
                    <img src="imgen/produin 5.png" alt="polera">
                    <h2>POLOS</h2>
                </div>
                <div class="inproco">
                    <img src="imgen/produin 6.png" alt="bolsas">
                    <h2>BOLSAS</h2>
                </div>
                <div class="inproco">
                    <img src="imgen/produin 7.png" alt="gorra">
                    <h2>GORRAS</h2>
                </div>
                <div class="inproco">
                    <img src="imgen/produin 8.png" alt="polo">
                    <h2>POLOS FORMALES</h2>
                </div>
                <div class="inproco">
                    <img src="imgen/produin 9.png" alt="refrigerador">
                    <h2>REFRIGERADOR</h2>
                </div>
            </div>
            <div id="registrar"><a href="1.1.1 Registrarusr.php">Quiero registrarme!</a></div>
        </div>
    </section>
    <?php
    require "2.10 pie de pagina.php";
?>
</body>

</html>