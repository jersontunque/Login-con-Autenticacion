<?php 
include_once "./controller/authController.php";

$controladorLogin = new authController();
$controladorLogin ->login();





include "./views/login.php"

?>