<?php
session_start();
spl_autoload_register(function ($clase) {
    include '../class/'.$clase.'/'.$clase.'.php';
});
$json=file_get_contents("php://input");
$obj=json_decode($json,true);
$con=new Conexion();
$user =new User($con);

$nombre=$obj['nombre'];
$documento=$obj['documento'];
$tipod=$obj['tipod'];
$email=$obj['email'];
$celular=$obj['celular'];
$user->setNombre($nombre);
$user->setTelefono($documento);
$user->setCiudad($tipod);
$user->setMail($mail);
$user->setCelular($celular);
$user->save();
include "notificacionInscripcion.php";
echo json_encode($nombre);
?>




