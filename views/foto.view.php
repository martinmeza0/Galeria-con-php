<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Galeria</title>
</head>
    <script src="https://kit.fontawesome.com/e3ae087a9a.js" crossorigin="anonymous"></script>
<body>    
    <div class="contenedor">
        <div class="foto">
            <h1 class="titulo"><?php if (!empty($foto['titulo'])){
                echo $foto['titulo'];
            } else {
                echo $foto['imagen'];
            }?></h1>
            <img src="fotos/<?php echo $foto['imagen']; ?>" alt="">
            <p class="descripcion"><?php echo $foto['descripcion']; ?></p>
            <a class="boton" href="index.php">Regresar <i class="fas fa-sign-out-alt"></i></a>
        </div>
    </div>
</body>
</html>