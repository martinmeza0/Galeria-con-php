<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Galeria</title>
</head>
    <script src="https://kit.fontawesome.com/e3ae087a9a.js" crossorigin="anonymous"></script>
<body>
    <header>
        <div class="contenedor">
            <h1>Mi galeria</h1>
            <div class="logo"><i class="far fa-image"></i></div>
            <a class="boton" href="subir.php"> Subir una imagen <i class="fas fa-upload"></i></a>
        </div>
    </header>
    <section class="fotos">
        <div class="contenedor">
            <?php foreach($fotos as $foto):?>
                <div class="thumb">
                    <a href="foto.php?id=<?php echo $foto['id']; ?>">
                        <img src="fotos/<?php echo $foto['imagen']; ?>" alt="<?php echo $fotos['titulo'] ?>">
                    </a>
                </div>
            <?php endforeach;?>
        </div>
        <div class="contenedor">
            <div class="paginacion">
                <?php if ($pagina_actual > 1):?>
                    <a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"><i class="fas fa-arrow-left"></i></a>
                <?php endif;?>

                <?php if ($total_paginas != $pagina_actual):?>
                    <a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha"><i class="fas fa-arrow-right"></i></a>
                <?php endif;?>
            </div>
        </div>
    </section>
</body>
</html>