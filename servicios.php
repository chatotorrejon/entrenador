<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ALFREDO DE LOPE BURGOA">
    <link rel="stylesheet" href="css/estilos.css">
    <title>SERVICIOS</title>
</head>
<body>
    <div id="invisiblecuerpo2">
        <?php include 'log/header.php'; ?>
        <div id="rutinasynutricion">
            <div id="rutinas">
                <span id="spanrutinas">RUTINAS</span>
                <span>Día 1: Entrenamiento de Fuerza
                    Sentadillas: 3 series de 10 repeticiones
                    Día 2: Entrenamiento de Cardio y Flexibilidad
                    Estiramientos Dinámicos: 10 minutos
                    Día 3: Descanso Activo
                    Caminata Ligera: 30 minutos
                    Día 4: Entrenamiento de Fuerza
                    Press de Hombros: 3 series de 8 repeticiones
                    Día 5: Entrenamiento de Cardio y Flexibilidad
                    Natación: 30 minutos
                    Estiramientos Estáticos: 10 minutos
                    Mantén cada estiramiento durante al menos 20 segundos.
                    Día 6: Descanso Activo
                    Caminata Ligera o Yoga Suave: 30 minutos
                    Día 7: Descanso Completo
                </span>
            </div>
            <div id="video">
                <iframe src="videos/26202-357512356_small.mp4" frameborder="0"></iframe>
            </div>
            <div id="imc">
                <span id="spanimc">IMC</span>
                <span id="spanimc2">IMC = peso / altura<sup>2</sup></span>
                <form action="" method="">
                    <label for="peso">PESO</label><br>
                    <input type="text" id="peso" class="peso" name="peso"><br>
                    <label for="altura">ALTURA</label><br>
                    <input type="text" id="altura" class="altura" name="altura"><br>
                    <label for="resultado">TU IMC ES:</label><br>
                    <input type="text" id="resultado" class="resultado" name="resultado"><br>
                    <button type="button" onclick="calcularimc()">CALCULAR IMC</button><br>
                    <button type="reset">BORRAR</button>
                </form>
            </div>
            
        </div>
        <div id="nutricion">
                <span id="spannutricion2">NUTRICIÓN</span>
                <table>
                    <tr>
                        <th>Alimento</th>
                        <th>Porción</th>
                        <th>Calorías</th>
                        <th>Proteínas (g)</th>
                        <th>Grasas (g)</th>
                        <th>Carbohidratos (g)</th>
                    </tr>
                    <tr>
                        <td>Pollo a la parrilla</td>
                        <td>100g</td>
                        <td>165</td>
                        <td>31</td>
                        <td>3.6</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Arroz Integral</td>
                        <td>1 taza cocida (195g)</td>
                        <td>218</td>
                        <td>4.5</td>
                        <td>0.6</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>Brócoli</td>
                        <td>1 taza (91g)</td>
                        <td>31</td>
                        <td>2.5</td>
                        <td>0.3</td>
                        <td>6</td>
                    </tr>

                </table>
            </div>
        <?php include 'log/footer.php'; ?>
    </div>
</body>
<script>
     function calcularimc() {
            
            var peso = parseFloat(document.getElementById("peso").value);
            var altura = parseFloat(document.getElementById("altura").value);
            
            
            var imc = peso / Math.pow(altura, 2);
            
            
            document.getElementById("resultado").value = imc.toFixed(2); 
            
            return false;
        }
</script>
</html>