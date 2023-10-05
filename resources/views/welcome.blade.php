<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    
    <title>TURISMO WORLD</title>
</head>
<body>
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
        }
    </style>

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
            <img src="imagen1.jpg" alt="Acerca del Destino">
            <h2>Acerca del Destino</h2>
            <p>Información general sobre el destino turístico.</p>
        </div>

        <div class="section-box">
            <img src="imagen2.jpg" alt="Atracciones Turísticas">
            <h2>Atracciones Turísticas</h2>
            <p>Descripción de las principales atracciones y actividades.</p>
        </div>

        <div class="section-box">
            <img src="imagen3.jpg" alt="Alojamiento">
            <h2>Alojamiento</h2>
            <p>Opciones de alojamiento disponibles.</p>
        </div>

        <div class="section-box">
            <img src="imagen4.jpg" alt="Gastronomía">
            <h2>Gastronomía</h2>
            <p>Restaurantes locales y platos típicos.</p>
        </div>
    </div>
    
    <footer>
       <center> <p>&copy; 2023 Nombre de tu Destino Turístico</p></center>
    </footer>
</body>
</html>
