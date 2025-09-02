<?php 
include_once "./Controller/usuariosController.php";

$controladosUsuario = new usuarioControlador;

$envio = $controladosUsuario->insertar();





include "./views/crearCuenta.php";

?>