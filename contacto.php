<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ALFREDO DE LOPE BURGOA">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/javascript"></script>
    <title>CONTACTO</title>
</head>
<body>
    
    <div id="cuerpoinvisiblecontacto">
        <?php include 'log/header.php'; ?>
        <div id="cuerpoformulario">
            <span id="paginacontacto">PÁGINA DE CONTACTO</span>
            <form action="contacto2.php" method="post">

                <div id="nombre1">
                    <label for="nombre">NOMBRE: </label>
                    <input type="text" id="nombre" class="nombre" name="nombre">
                </div><br>
                <div id="apellidouno">
                    <label for="primerapellido">PRIMER APELLIDO: </label>
                    <input type="text" id="primerapellido1" class="primerapellido1" name="primerapellido1">
                </div><br>
                <div id="apellidodos">
                    <label for="segundoapellido">SEGUNDO APELLIDO: </label>
                    <input type="text" id="segundoapellido2" class="segundoapellido2" name="segundoapellido2">
                </div><br>
                <div id="email5">
                    <label for="email1">EMAIL: </label>
                    <input type="email" id="email2" class="email2" name="email2">
                </div><br>
                <div id="email5">
                    <label for="email3">REPITE EL EMAIL: </label>
                    <input type="email" id="email4" class="email4" name="email4">
                </div><br>
                <div id="telefono">
                    <label for="telefono1">TELEFONO: </label>
                    <input type="text" id="telefono2" class="telefono2" name="telefono2">
                </div><br>
                <span id="comentario1">COMENTARIO MAXIMO 256 CARACTERES:</span><br>
                <textarea name="comentario" id="comentario" class="comentario" max="256"></textarea><br>
                <button type="submit">ENVIAR</button><br>
                <button type="reset">BORRAR</button>
            </form>
        </div>
        <?php include 'log/footer.php'; ?>
    </div>
</body>
</html>