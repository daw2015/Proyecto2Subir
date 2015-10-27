<?php
require '../clases/AutoCarga.php';
$imagen = Request::get("imagen");
$trozos = pathinfo($imagen);
$extension = $trozos["extension"];

if($extension=="jpg"){
    header('Content-type: image/jpeg');
}elseif($extension=="gif"){
    header('Content-type: image/gif');
}

readfile("../../../carpeta/$imagen");