<?php 

include_once (__DIR__ . "../../models/usuario.php");

class authController{
    private $modelo;
    
    public function __construct(){
        $this->modelo = new Usuarios;
    }

    public function login (){
        if(isset($_POST['login'])){
           $email = $_POST['email'];
           $contraseña = $_POST['contraseña'];
           $usuario = $this->modelo->buscarPorEmail($email);
           if($usuario && password_verify($contraseña, $usuario['contraseña_hash'])){
            session_start();
            $_SESSION['nombre'] = $usuario['nombre'];
            $_SESSION['email'] = $usuario['email'];
            header("Location: ./PaginaPrincipal.php");
            exit;  
           }
           return "hubo un error";
        }
        else{
            return "hubo un error";
        }
    }
}



?>