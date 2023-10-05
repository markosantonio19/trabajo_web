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
    </style>
</head>
<body>
    <header>
        <h1>huanuco city</h1>
        <nav>
            <ul>
                <?php
                $navegacion = array(
                    'Acerca del Destino' => 'acerca',
                    'Atracciones Turísticas' => 'atracciones',
                    'Alojamiento' => 'alojamiento',
                    'Gastronomía' => 'gastronomia'
                );

                foreach ($navegacion as $nombre => $enlace) {
                    echo "<li><a href='#$enlace'>$nombre</a></li>";
                }
                ?>
            </ul>
        </nav>
    </header>
    
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
            <p>cueva de las lechusas<br><a href="#leer-mas-lugares-turisticos"  class="leer-mas">Leer más</a></p>
        </div>

        <div class="section-box">
            <img src="https://d2lcsjo4hzzyvz.cloudfront.net/blog/wp-content/uploads/2021/12/14154413/los-mejores-destinos-para-viajar-fin-de-ano.jpg" alt="Alojamiento">
            <h2>donde viajar</h2>
            <p>recomendaciones para viajar.<br><br><a href="https://es.wikipedia.org/wiki/Hu%C3%A1nuco" target="_blank" class="leer-mas">Leer más</a></p>
        </div>

        <div class="section-box">
            <img src="imagen4.jpg" alt="Gastronomía">
            <h2>contactos y contratos</h2>
            <p>Restaurantes locales y platos típicos.<br><br><a href="https://es.wikipedia.org/wiki/Hu%C3%A1nuco" target="_blank" class="leer-mas">Leer más</a></p>
        </div>
    </div>


<br><br><br><br><br>
    <section id="leer-mas-lugares-turisticos">
    <h2>Más sobre Lugares Turísticos</h2>
    <p>Aquí encontrarás información adicional sobre los lugares turísticos que puedes visitar en esta región.</p>
</section>

    
    <footer>
        <p>&copy; 2023 Nombre de tu Destino Turístico</p>
    </footer>
</body>
</html>
