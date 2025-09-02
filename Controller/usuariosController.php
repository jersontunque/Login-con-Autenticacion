<?php 
    include_once (__DIR__ .  "../../models/usuario.php");

class usuarioControlador{
    private $modelo;

    public function __construct(){
        $this->modelo = new Usuarios;
    }

    public function insertar(){
        if(isset($_POST['enviar_crear'])){
            if(!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['contraseña'])){
                $nombre = $_POST['nombre'];
                $email = $_POST['email'];
                $contraseña = $_POST['contraseña'];
                $envio = $this->modelo->insertarUsuario($nombre,$email,$contraseña);
                if($envio){
                    return "Se inserto correctamente";
                }
                else{
                    return "hubo un error";
                }
            }
        }
    }

    public function Logear(){
        
    }


}




?>