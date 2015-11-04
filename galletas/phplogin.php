<?php
require '../clases/AutoCarga.php';

 $users = array(
     "juan" => "abc",
     "pepe" => "ghi"
 );
 
 $user = Request::post("user");
 $password = Request::post("password");
 $recordar =  Request::post("recordar");
 $sesion = new Session();

 if(isset($users[$user])&& $users[$user]==$password){
     if($recordar!==null){
         Galleta::set("user", $user);
     }else{
         Galleta::delete("user");
     }
     $usuario = new Usuario($user);
     $sesion->setUser($usuario);
     $sesion->sendRedirect("index.php");
 }else{
     Galleta::delete("user");
     $sesion->destroy();
     $sesion->sendRedirect("index.php");
 }
 
