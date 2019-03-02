<?php
session_start();
spl_autoload_register(function ($clase) {
    include '../class/'.$clase.'/'.$clase.'.php';
});
$con=new Conexion();
$termino=new Termino($con);
$atributo=new Atributo($con);
$addatributo=new Addatributo($con);
$variacion=new Variacion($con);
if($_POST['tipoedit']=='atributo') {
    $idv = $_POST['idv'];
    $idp = $_POST['idp'];
    $ida = $_POST['ida'];
    $base = $_POST['base'];
    $valora = $_POST['valora'];
    $operacion = $_POST['operacion'];
    $dependencia = $_POST['operacion'];
    $codDependiente = $_POST['codDependiente'];
    $unidad = $_POST['unidad'];
    $variacion->setValora($valora);
    $variacion->setUnidad($unidad);
    $variacion->setDependencia($dependencia);
    $variacion->setCodDependiente($codDependiente);
    $variacion->setOperacion($operacion);
    $variacion->setBase($base);
    $variacion->update($idv);
}else{
    $ida=$_POST['ida'];
    $idp=$_POST['idp'];
    if(count($_POST['terminos'])>0){
        $terminos=$_POST['terminos'];
        foreach ($terminos as $t){
            $variacion->setProducto($idp);
            $variacion->setTermino($t['idt']);
            $variacion->setAtributo($ida);
            $variacion->setTipovalor($t['tipovalor']);
            $variacion->setValor($t['valor']);
            $variacion->setMin($t['min']);
            $variacion->setMax($t['max']);
            $variacion->setOrden($t['orden']);
            if(empty($t['idvt'])){
                $variacion->save();
            }else{
                $variacion->update($t['idvt']);
            }

        }
    }
}
