<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Modelos de Ferrari. </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1> Mostrando los modelos de Ferrari. </h1>
    <?php
    include 'Ejercicio2.php';
    foreach(Modelos_Ferrari() as $Ejercicio2) {
    ?>
    <div class="card text-center mb-3" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo 'id: '. $Ejercicio2['id']?></h5>
            <p class="card-text"><?php echo 'nombre: '.$Ejercicio2['nombre']?></p>
            <a href="#" class="btn btn-primary"><?php echo 'precio: $'.$Ejercicio2['precio'] ?></a>
        </div>
    </div>
    <?php
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>