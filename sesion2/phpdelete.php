<?php

session_start();
session_destroy; //Borra todas las variables de sesión
if(isset($_SESSION['friends'])){
    unset($_SESSION["friends"]); // sólo borra la variable de sesion friends
}

header("Location:index.php");