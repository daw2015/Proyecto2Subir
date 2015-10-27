<?php

require '../clases/AutoCarga.php';

$subir= new FileUpload("archivo");
$subir->setDestino("../../../carpeta/");

if($subir->upload()){
    echo 'Archivo subido con éxito';
} else{
    echo 'Archivo no subido';
}