<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    
    <title>TURISMO WORLD</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #0077b6;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            
        }

        /* Estilos para las secciones */
        .section-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            padding: 20px;
        }

        .section-box {
            flex: 1;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
        }

        .section-box img {
            max-width: 100%;
            height: auto;
            object-fit: cover;
            transition: transform 0.8s;
        }

        .section-box:hover img {
            transform: scale(1.1);
        }

        /* Estilos para el pie de página */
        footer {
            text-align: center;
            background-color: #0077b6;
            color: #fff;
            padding: 10px;
        }


        .leer-mas {
                    color: #0077b6;
                    text-decoration: none;
                    font-weight: bold;
                    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2); /* Agregar sombra */
                    transition: transform 0.2s;/* Escala el enlace al 105% del tamaño original al pasar el cursor */
                }

                .leer-mas:hover .leer-mas {
                    transform: scale(1.05); /* Escala el enlace al 105% del tamaño original al pasar el cursor */
                }





            .image-container {
            display: flex;
            width: 900px;
            height:600px;
            overflow: hidden;
        }

        .image-container div {
            width: 100%;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            position: relative;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.8;
            transition: width 0.5s ease, opacity 0.5s ease, filter 0.5s ease;
        }

        .image-container span {
            position: absolute;
            bottom: 10px;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 5px;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .image-container div:hover img {
            cursor: pointer;
            width: 600px;
            opacity: 1;
            filter: contrast(120%);
        }

        .image-container div:hover span {
            opacity: 1;
        }    
    </style>
</head>
<body>
    <header>
        <h1>huanuco city</h1>
         
    <nav class="nav">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/paq">Paquetes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cont">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/inicio-sesion">Iniciar Sesión</a>
                    </li> <!-- Agrega este elemento para el botón de inicio de sesión -->
                </ul>
            </div>
        </div>
    </nav>
    </header>


    <center>
        <div class="image-container">
        <div>
            <img src="../photos/cueva.jpg" alt="">
            <span>CUEVA DE LAS LECHUZAS</span>
        </div>
        <div>
            <img src="../photos/cordillera-huayhuash.jpg" alt="">
            <span>CORDILLERA DE HUAYHUASH</span>
        </div>
        <div>
            <img src="../photos/bella.jpg" alt="">
            <span>LA BELLA DURMIENTE</span>
        </div>
        <div>
            <img src="../photos/huanopanpa.jpg" alt="">
            <span>HUANOPANPA 4</span>
        </div>
        <div>
            <img src="../photos/kotosh.jpg" alt="">
            <span>COMPJEO ARQUEOLOGIOCO KOTOSH</span>
        </div>
        </div>
     </center>
    
        
        <br><br><br><br>
    <div class="section-container">
        <div class="section-box">
            <img src="https://seturismo.pe/wp-content/uploads/2018/08/plaza-de-armas-de-huanuco.jpg" alt="huanuco">
            <h2>Sobre Huanuco</h2>
            <p>Huánuco es una región ubicada
                 en el centro de Perú, en la zona conocida
                  como la Sierra Central. Su capital es la ciudad de 
                  Huánuco. Aquí tienes información breve 
                  y concisa sobre Huánuco <br><br><a href="https://es.wikipedia.org/wiki/Hu%C3%A1nuco" target="_blank" class="leer-mas">Leer más</a></p>

        
        </div>

        

        <div class="section-box">
            <img src="https://portal.andina.pe/EDPfotografia3/Thumbnail/2022/07/15/000883617W.jpg" alt="Atracciones Turísticas">
            <h2>Lugares Turísticos</h2>
            <p>un si fin de lugares que podemos visitar para ello aca
                 les muestro una lista y el costo que le cotizaran<br><a href="#leer-mas-lugares-turisticos"  class="leer-mas">Leer más</a></p>
        </div>

        <div class="section-box">
            <img src="https://d2lcsjo4hzzyvz.cloudfront.net/blog/wp-content/uploads/2021/12/14154413/los-mejores-destinos-para-viajar-fin-de-ano.jpg" alt="Alojamiento">
            <h2>donde viajar</h2>
            <p>recomendaciones para viajar.<br><br><a href="https://es.wikipedia.org/wiki/Hu%C3%A1nuco" target="_blank" class="leer-mas">Leer más</a></p>
        </div>

        <div class="section-box">
            <img src="https://www.macelleria.com.mx/wp-content/uploads/2014/05/recervaciones-macelleria.png" alt="Gastronomía">
            <h2>contactos y contratos</h2>
                    <p>aqui podras ponernos en contacto con nosotros.<br>
           <center> <table>
            <tr>
                <td>Servicio</td>
                <td>Precio</td>
            </tr>
            <tr>
                <td>tours indvidual </td>
                <td>$150 todo el dia</td>
            </tr>
            <tr>
                <td>tours doble</td>
                <td>$250 todo el dia</td>
            </tr>
            <tr>
                <td>tours familiar</td>
                <td>$2000 todo el dia</td>
            </tr>
            </table></center>
<br> <a href="#leer-mas-reservaciones" class="leer-mas">Leer más</a></p>
        </div>
    </div>


<br><br><br><br><br>
    <section id="leer-mas-lugares-turisticos">
    <h2>Más sobre Lugares Turísticos</h2>
    <p>Aquí encontrarás información adicional sobre los lugares turísticos que puedes visitar en esta región.</p>
    </section>


<br><br><br><br><br>
    <section id="leer-mas-reservaciones">
    <h2>Más sobre Lugares Turísticos</h2>
    <p>Aquí encontrarás información adicional sobre los lugares turísticos que puedes visitar en esta región.</p>
    </section>
    



    
    <footer>
        <p>&copy; 2023 Nombre de tu Destino Turístico</p>
    </footer>
</body>
</html>
