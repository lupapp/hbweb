<?php
session_start();
spl_autoload_register(function ($clase) {
    include '../class/'.$clase.'/'.$clase.'.php';
});
$con=new Conexion();
$variacion=new Variacion($con);

$ida=$_POST['ida'];
$idp=$_POST['idp'];

$variacion->deleteByAtributoAndProducto($ida, $idp);


echo 'exito';