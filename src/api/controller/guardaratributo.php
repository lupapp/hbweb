<?php
session_start();
spl_autoload_register(function ($clase) {
    include '../class/'.$clase.'/'.$clase.'.php';
});
$con=new Conexion();
$termino=new Termino($con);
$atributo=new variacion($con);
$addatributo=new Addatributo($con);
$variacion=new Variacion($con);

$idp=$_POST['idp'];
$ida=$_POST['ida'];
$base=$_POST['base'];
$valora=$_POST['valora'];
$operacion=$_POST['operacion'];
$unidad=$_POST['unidad'];
$addatributo->setProducto($idp);
$addatributo->setAtributo($ida);
$addatributo->save();

$variacion->setProducto($idp);
$variacion->setAtributo($ida);
$variacion->setValora($valora);
$variacion->setUnidad($unidad);
$variacion->setBase($base);
$variacion->save();

if(count($_POST['terminos'])>0){
    $terminos=$_POST['terminos'];
    foreach ($terminos as $t){
        $variacion->setProducto($idp);
        $variacion->setTermino($t['idt']);
        $variacion->setTipovalor($t['tipovalor']);
        $variacion->setValor($t['valor']);
        $variacion->setMin($t['min']);
        $variacion->setMax($t['max']);
        $variacion->setOrden($t['orden']);
        $variacion->save();
    }
}
echo 'exito';