<?php
session_start();
spl_autoload_register(function ($clase) {
    include '../class/'.$clase.'/'.$clase.'.php';
});
$con=new Conexion();
$user =new User($con);
$nombre=$_POST['nombre'];
$documento=$_POST['documento'];
$tipod=$_POST['tipod'];
$mail=$_POST['mail'];
$celular=$_POST['celular'];
$array =()
$user->setNombre($nombre);
$user->setTelefono($documento);
$user->setCiudad($tipod);
$user->setMail($mail);
$user->setMovil($celular);
$user->save();
$_SESSION['ins']=
header('Location: procesar-pedido.php');




