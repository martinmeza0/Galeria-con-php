<?php
require('funciones.php');
$conexion = conexion('galeria', 'root', '');

if (!$conexion) {
    header('Location: error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
    $check = @getimagesize($_FILES['foto']['tmp_name']); //comprueba el tamaño de la imagen, si no es una imagen devolvera error
    if($check !==false) {
        $carpeta_destino = 'fotos/';
        $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
        // move_uploaded_file(filename, destination);
        move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);
        
        $statement = $conexion->prepare('
            INSERT INTO fotos (titulo, imagen, descripcion)
            VALUES (:titulo, :imagen, :descripcion)
            ');

        $statement ->execute(array(
            ':titulo' => $_POST['titulo'],
            ':imagen' => $_FILES['foto']['name'],
            ':descripcion' => $_POST['descripcion']
        ));

        header('Location: index.php');
    } else {
        $error = 'El archivo no es una imagen o es muy pesado';
    }
}

require 'views/subir.view.php';

?>