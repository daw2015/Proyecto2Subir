<?php
require '../clases/AutoCarga.php';

 $users = array(
     "juan" => "abc",
     "pepe" => "ghi"
 );
 
 $user = Request::post("user");
 $password = Request::post("password");
 $sesion = new Session();

 if(isset($users[$user])&& $users[$user]==$password){
     $usuario = new Usuario($user);
     $sesion->setUser($usuario);
     $sesion->sendRedirect("user.php");
 }else{
     $sesion->destroy();
     $sesion->sendRedirect("login.php");
 }
 
