<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manómetros</title>

    <link rel="stylesheet" href="css/estilos.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

    <!--HEADER-->

    <main class="pink lighten-4">

    <nav class="nav-wrapper black">
        <div class="container">
            <a href="index.html" class="brand-logo">Medición de pozos petroleros</a>

            <a href="#" data-target="menu-responsive" class="sidenav-trigger">
                <i class="material-icons">menu</i>
            </a>

            <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Inicio</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="menu-responsive">
        <li><a href="index.php">Inicio</a></li>
    </ul>

    <!--BODY-->

    <div class="fondo-section">
        <div class="container section black-text">

        </div>
    </div>

    <div class="container">
        <div class="row">
            <form class="col s12" action="agregando.php" method="post">
                <div class="input-field col s4">
                    <select name="nombrePozo">
                        <option disabled selected>Escoja una opción</option>

                        <?php

                        include_once("conexion.php");

                        $mostrar = "SELECT * FROM pozos";
                        $consulta = mysqli_query($conexion, $mostrar);

                        while ($obtenerID = mysqli_fetch_array($consulta)) {
                            echo '<option>' . $obtenerID['nombrePozo'] . '</option>';
                        }
                        
                        mysqli_close($conexion);

                        ?>

                    </select>
                    
                    <label>¿Qué pozo desea escoger?</label>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input id="input_text" type="text" data-length="10" name="medicion" required>
                        <label class="black-text" for="input_text">Medición:</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input id="input_text" type="text" data-length="10" name="fecha" required>
                        <label class="black-text" for="input_text">Fecha:</label>
                        <?php echo 'Escribir la fecha en el siguiente formato: '. date('Y-m-d');?>
                    </div>
                </div>
                
                <button class="btn waves-effect waves-light black" type="submit" name="action" value="si">Agregar</button>
            </form>
        </div>
    </div>

    <!--FOOTER-->

    <footer class="page-footer black">

        <div class="footer-copyright">
            <div class="container">

                © 2022 - Ivana Moreno - Programación Web
 
            </div>
        </div>

    </footer>

    </main>

    <!--SCRIPT-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://kit.fontawesome.com/d6ff169d2d.js" crossorigin="anonymous"></script>

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();
        });

    </script>

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.carousel');
            var instances = M.Carousel.init(elems,{
                duration: 500,
                indicators: true,
                fullWidth: true
            });
        });

    </script>
</body>
</html>