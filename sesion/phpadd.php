<?php

require '../clases/AutoCarga.php';

$friend = Request::get("friend");

//Habilitar el acceso a la sesión
session_start();

if(!isset($_SESSION["friends"])){
    //Lo tengo que crear
    $amigos = array();
    $amigos[] = $friend;
    $_SESSION['friends'] = $amigos;
}else{
    //Ya esta creado
    
    $_SESSION['friends'][] = $friend;
    
   //Otra forma
    
 /* $amigos = $_SESSION["friends"];
    $amigos[] = $friend;
    $_SESSION['friends'] = $amigos; */
    
}
 // var_dump($_SESSION['friends']);


/*Una vez que la pagina termine de ejecutarse, devuelve el control 
     a la otra pagina inmediatamente
 */

header("Location:index.php");
exit(); //Evita que se ejecute nada mas
/* Todo lo que se haga a continuación del header, se sigue haciendo... */
 $_SESSION['friends'][] = $friend; //Añadiria dos veces al mismo amigo