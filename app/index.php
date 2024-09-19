<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome a la pag en PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="text-center">
        <?php
                echo '<h1 class="display-4 text-primary mb-4">Bienvenido a la pagina</h1>';
            ?>
        </div>
    </div>
    <div class="text-center">
        <?php
            echo '<p class="lead">Docker es una plataforma de código abierto que se lanzó en 2013 y que ha contribuido a que la contenedorización se haya democratizado. Su historia se puede resumir de la siguiente manera:</p>';
        ?>
    </div>
    <div class="text-center">
    <?php
            echo "<h2>¿Por qué usar Docker?</h2>";
            echo "<li>Las instancias de Docker son más ligeras</li>";
            echo "<li>Compatibilidad y mantenimiento más fácil</li>";
            echo "<li>Eficiencia de imágenes de contenedor</li>";
            echo "<li>Simplicidad y configuraciones más rápidas</li>";
            ?>
    </div>
         

    ?>      

    <div class="text-center my-4">
        <img src="assets/docker.png" alt="Docker Image" class="img-fluid rounded shadow" style="width:400px;height:auto;">
    </div>
    <div  class="text-center">
        <button onClick="window.location.href='contactate.php';"  class="btn btn-warning">Contactate</button>
    </div>
    
</body>
</html>
