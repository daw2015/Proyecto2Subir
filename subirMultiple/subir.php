<?php
var_dump($_FILES["archivo"]);
////texto y archivo
//require '../clases/Request.php';
//require '../clases/FileUpload.php';
//
//
//$texto = Request::post("texto");
//echo "<h1>$texto</h1>";
//echo "<h1>error: ".$_FILES["archivo"]["error"]."</h1>";
//echo "<h1>name: ".$_FILES["archivo"]["name"]."</h1>";
//echo "<h1>type: ".$_FILES["archivo"]["type"]."</h1>";
//echo "<h1>size: ".$_FILES["archivo"]["size"]."</h1>";
//echo "<h1>temp: ".$_FILES["archivo"]["tmp_name"]."</h1>";
//
////move_uploaded_file($_FILES["archivo"]["tmp_name"],"./X");
//
///*Aqui empieza el subir*/
//
//$subir= new FileUpload("archivo");
//$subir->setDestino("./img/");
//$subir->setTamaño(100000);
////$subir->setNombre("archivoSubido");
//$subir->addTipo("txt");
//$subir->setPolitica(FileUpload::RENOMBRAR);
//if($subir->upload()){
//    echo 'Archivo subido con éxito';
//} else{
//    echo 'Archivo no subido';
//}
