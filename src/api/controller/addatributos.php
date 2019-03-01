<?php @session_start();
$suma=0;
$cantidad=0;

if(isset($_SESSION['atributos'])){


    if(isset($_POST['id-delete'])){
        $arreglo=$_SESSION['atributos'];
        $idDelete=$_POST['id-delete'];
        for($i=0;$i<count($arreglo);$i++){
            if($arreglo[$i]['id']==$idDelete){
                unset($arreglo[$i]);
                $arreglo=array_values($arreglo);
                $_SESSION['atributos']=$arreglo;
            }
        }

    }
    if(isset($_POST['slug'])&& $_POST['slug']!=''){
        $arreglo=$_SESSION['atributos'];
        $numero=0;
        $contador=0;
        $arreglo=$_SESSION['atributos'];
        $id=$_POST['id'];
        $slug=$_POST['slug'];
        $nombre=$_POST['nombre'];
        $base=$_POST['base'];
        $tipo=$_POST['tipo'];
        $orden=$_POST['orden'];
        $valor=$_POST['valor'];
        $terminos=$_POST['terminos'];
        $arregloNuevo=array(
            'id'=>$id,
            'slug'=>$slug,
            'nombre'=>$nombre,
            'base'=>$base,
            'tipo'=>$price,
            'orden'=>$orden,
            'valor'=>$valor,
            'terminos'=>$terminos
        );
        array_push($arreglo, $arregloNuevo);
        $_SESSION['atributos']=$arreglo;

    }
}else{
    if(isset($_POST['slug']) and $_POST['slug']!=''){
        $id=$_POST['id'];
        $slug=$_POST['slug'];
        $nombre=$_POST['nombre'];
        $base=$_POST['base'];
        $tipo=$_POST['tipo'];
        $orden=$_POST['orden'];
        $valor=$_POST['valor'];
        $terminos=$_POST['terminos'];
        $arreglo[]=array(
            'id'=>$id,
            'slug'=>$slug,
            'nombre'=>$nombre,
            'base'=>$base,
            'tipo'=>$price,
            'orden'=>$orden,
            'valor'=>$valor,
            'terminos'=>$terminos
        );

        $_SESSION['atributos']=$arreglo;

    }else{
    }
}
if(isset($_SESSION['atributos'])){
    $datos=$_SESSION['atributos'];
    for($i=0;$i<count($datos);$i++){
        $atri=json_decode($datos[$i]['atributos']);

        echo"
        
        <li>
          <div class='b-option-cart__items__img'>
              <div class='view view-sixth'>
                  <img data-retina='' src='Administer/public/img/".$datos[$i]['img']."' alt=''>
                  <div class='b-item-hover-action f-center mask'>
                      <div class='b-item-hover-action__inner'>
                          <div class='b-item-hover-action__inner-btn_group'>
                              <a href='#' class='b-btn f-btn b-btn-light f-btn-light info'><i class='fa fa-link'></i></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class='b-option-cart__items__descr'>
              <strong class='b-option-cart__descr__title f-option-cart__descr__title'><a href='#'>".$datos[$i]['nombre']."";
        foreach($atri as $a){
            echo " ".$a->valor." ";
        }
        echo "</a></strong><span class='b-option-cart__descr__cost f-option-cart__descr__cost'>".$datos[$i]['cant']." x $".number_format($datos[$i]['price'], 0, ',', '.')."</span>
          </div>
          <i class='fa fa-times b-icon--fa quitar' data-atributos='".$datos[$i]['atributos']."' data-id='".$datos[$i]['id']."' data-idcla='".$datos[$i]['idclasif']."'></i>
        </li>
        ";


    }

}else{
    echo"<center>No hay productos</center>";
}
$_SESSION['cantidad']=$cantidad;
$_SESSION['total']=$suma;
?>
