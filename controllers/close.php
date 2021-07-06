<?php
 session_start();
 echo "Cerrar sesion";
//unset($_SESSION["nombre"]);
//unset($_SESSION["datosUsuario"]);
//unset($_SESSION["carrito"]);
session_destroy() ;
 header('Location: ../index.php');
?>