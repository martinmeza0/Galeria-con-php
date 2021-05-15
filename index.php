<?php

require 'funciones.php';

//Paginacion 
$fotos_por_pagina = 8;

$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1);
$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;

//accediendo a la bd
$conexion = conexion('galeria', 'root', '');
if (!$conexion) {
    header('Location: error.php');
}

//preparamos la consulta
$statement = $conexion->prepare("
    SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $fotos_por_pagina
");

$statement->execute();
$fotos = $statement->fetchAll();

//si no hay fotos, error 404
if (!$fotos) {
    header('location: error.php');
}

$statement = $conexion->prepare("SELECT FOUND_ROWS() as total_filas");
$statement->execute();
$total_post = $statement->fetch()['total_filas'];

//calculamos el total de paginas con ceil (redondea los decimales hacia el siguiente número entero)
$total_paginas = ceil($total_post / $fotos_por_pagina);

require 'views/index.view.php';

?>