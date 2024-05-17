<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ALFREDO DE LOPE BURGOA">
    <title>ENCABEZADO</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body id="cuerpo1">
    <div>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="acercade.php">Acerca de</a></li>
                <li><a href="servicios.php">Servicios</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li class="search-container">
                    <form action="/buscar" method="get">
                        <input type="text" placeholder="Buscar..." name="busqueda">
                        <button type="submit"><img src="img/buscar.png" alt="Buscar" width="20"></button>
                    </form>
                </li>
            </ul>
        </nav>
    </div> 
    <div id="boton-contacto" class="grid diez quinientos flotar mover" onclick="mover()">
        <button class="boton-girado"><span class="contacto">Contacto</span></button>
        <form action="contacto2.php" method="post">
            <fieldset>
                <p>Rellena los datos de contacto</p>
                <div class="grid puro25">
                    <label for="nombre">Nombre <span>*</span></label>
                    <input type="text" id="nombre" class="nombre" name="nombre">
                    
                    <label for="primerapellido">PRIMER APELLIDO: <span>*</span></label>
                    <input type="text" id="primerapellido1" class="primerapellido1" name="primerapellido1">
                    
                    <label for="segundoapellido">SEGUNDO APELLIDO: <span>*</span></label>
                    <input type="text" id="segundoapellido2" class="segundoapellido2" name="segundoapellido2">

                    <label for="email1">EMAIL: <span>*</span></label>
                    <input type="email" id="email2" class="email2" name="email2">

                    <label for="email3">REPITE EL EMAIL: <span>*</span></label>
                    <input type="email" id="email4" class="email4" name="email4">

                    <label for="telefono1">TELEFONO: <span>*</span></label>
                    <input type="text" id="telefono2" class="telefono2" name="telefono2">
                </div>
                <div class="grid entera">
                    <label for="informacion">Informacion adicional</label>
                    <textarea name="comentario" id="comentario" class="comentario" max="256" style="width: 300px; height: 100px;"></textarea>
                </div>
                
                <input type="submit" value="Contactar">
                <button type="reset">BORRAR</button>
            </fieldset>
        </form>
    </div>
    <script>
        function mover() {
            document.querySelector("#boton-contacto").classList.toggle("mover");
        }
    </script>   
</body>
</html>