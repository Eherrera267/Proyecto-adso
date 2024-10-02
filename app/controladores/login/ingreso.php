<?php

include("../../config.php");

$email = $_POST["email"];
$clave = $_POST["clave_usuario"];

//Inicializar contador y prepar consulta SQL para seleccionar al usuario que coincida con el email y contraseña ingresado


$contador = 0;

$sql = "SELECT * FROM t_usuarios WHERE email= '$email' AND clave_usuario = '$clave';";

//preparar y ejecutar la consulta
$query = $pdo->prepare($sql);
$query->execute();

$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

foreach($usuarios as $usuario){
    $contador = $contador+1;
    $email_tabla = $usuario['email']; 
    echo $email_tabla;
}

//validacion de usuario:

if($contador==0){
    header('Location: '.$URL.'/login');       
}else{
    session_start();
    $_SESSION['sesion_email']= $email;
    header('Location: '.$URL.'/index.php');
    }
