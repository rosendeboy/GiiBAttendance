<?php

$comentario = $_POST['comentario'];
$nombre = $_POST['nombre'];

$leer = fopen("data.data", "r");
fwrite($escribir, "<b>Nombre:</b> $nombre<br><b>Comentario:</b><p> $comentario</p><hr>$aleer");
fclose($escribir);
include("comentarios.php")




?>
