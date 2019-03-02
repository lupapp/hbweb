<?php
session_start();
spl_autoload_register(function ($clase) {
    include '../class/'.$clase.'/'.$clase.'.php';
});
$con= new Conexion();
$user=new User($con);
$user->getAll();