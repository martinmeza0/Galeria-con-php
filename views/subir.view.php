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
        <div class="subirfoto">
            <h1 class="titulo">Subir una imagen</h1>
            <form class="formulario" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <label for="foto">Selecciona una imagen:</label>
                <input type="file" id="foto" name="foto">

                <label for="titulo">Titulo de la imagen:</label>
                <input type="text" id="titulo" name="titulo">

                <label for="descripcion">Descripcion:</label>
                <textarea name="descripcion" id="descripcion" placeholder="Ingresa una descripcion"></textarea>
                
                <?php  if (isset($error)): ?>
                    <p><?php echo $error; ?></p>
                <?php endif ?>
                
                <input type="submit" class="submit" value="Subir Foto">
            </form>
        </div>
    </div>
</body>
</html>