<?php include 'log/header.php'; ?>
<?php 
    $conexion = mysqli_connect("localhost","root","","entrenador")
        or die("PROBLEMAS CON LA CONEXION"
    );
    mysqli_query($conexion,"INSERT INTO datos(nombre,primerapellido,segundoapellido,email,repiteemail,telefono,comentario)VALUES('$_REQUEST[nombre]',
            '$_REQUEST[primerapellido1]','$_REQUEST[segundoapellido2]','$_REQUEST[email2]',
            '$_REQUEST[email4]','$_REQUEST[telefono2]','$_REQUEST[comentario]')")
            or die ("PROBLEMAS EN LA SELECCION" . mysqli_error($conexion));
    mysqli_close($conexion);
    echo "<h1 style='color: lightblue; background-color: purple; width: 350px; margin-right: auto; margin-left: auto; border: 20px solid blue; font-size: 30px; text-align: center; margin-top: 30px; border-radius: 50px';>LOS DATOS DEL USUARIO FUERON GUARDADOS CORRECTAMENTE</h1>";
?>    




<?php include 'log/footer.php'; ?>