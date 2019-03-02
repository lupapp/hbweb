<?php
session_start();
spl_autoload_register(function ($clase) {
    include '../class/'.$clase.'/'.$clase.'.php';
});
$con=new Conexion();
$termino=new Termino($con);
$terminos=$termino->getByIdAtributo($_POST['id']);
echo json_encode($terminos);