<?php

require '../clases/AutoCarga.php';
$friend = Request::get("friend");
$session = new Session();
$friends = $session->get("friends"); 

if($friends==null){
    //Otra forma en la clase phpadd de sesion
    $friends = array();
}

$friends[]= $friend;
$session->set("friends", $friends);

header("Location:index.php");
exit();