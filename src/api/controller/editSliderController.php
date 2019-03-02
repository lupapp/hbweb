<?php
spl_autoload_register(function ($clase) {
    include '../class/'.$clase.'/'.$clase.'.php';
});
$con=new Conexion();
$slider = new Slider($con);
$ds = DIRECTORY_SEPARATOR;  //1
$storeFolder = '../public/img';
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $bgi= $_FILES['bg'];
    $bgold=$_POST['bgold'];
    $imgi=$_FILES['img'];
    $imgold=$_POST['imgold'];
    $imgDataX=$_POST['imgDataX'];
    $imgDataY=$_POST['imgDataY'];
    $imgDataSpeed=$_POST['imgDataSpeed'];
    $imgDataStart=$_POST['imgDataStart'];
    $imgEfecto=$_POST['imgEfecto'];
    $imgWidth=$_POST['imgWidth'];
    $imgHeight=$_POST['imgHeight'];
    $caption=$_POST['caption'];
    $captionDataX=$_POST['captionDataX'];
    $captionDataY=$_POST['captionDataY'];
    $captionDataSpeed=$_POST['captionDataSpeed'];
    $captionDataStart=$_POST['captionDataStart'];
    $captionEfecto=$_POST['captionEfecto'];
    $caption2=$_POST['caption2'];
    $caption2DataX=$_POST['caption2DataX'];
    $caption2DataY=$_POST['caption2DataY'];
    $caption2DataSpeed=$_POST['caption2DataSpeed'];
    $caption2DataStart=$_POST['caption2DataStart'];
    $caption2Efecto=$_POST['caption2Efecto'];
    $btnTexto=$_POST['btnTexto'];
    $btnDataX=$_POST['btnDataX'];
    $btnDataY=$_POST['btnDataY'];
    $btnDataSpeed=$_POST['btnDataSpeed'];
    $btnDataStart=$_POST['btnDataStart'];
    $btnEfecto=$_POST['btnEfecto'];
    if (!empty($bgi['name'])) {
        $tempFile = $bgi['tmp_name'];          //3
        $targetPath = dirname(__FILE__) . $ds . $storeFolder . $ds;  //4
        $targetFile = $targetPath . $bgi['name'];  //5
        move_uploaded_file($tempFile, $targetFile); //6
        $con = 1;
        $bg = $bgi['name'];
    }else{
        $bg=$bgold;
    }
    if (!empty($imgi['name'])) {
        $tempFile = $imgi['tmp_name'];          //3
        $targetPath = dirname(__FILE__) . $ds . $storeFolder . $ds;  //4
        $targetFile = $targetPath . $imgi['name'];  //5
        move_uploaded_file($tempFile, $targetFile); //6
        $con = 1;
        $img=$imgi['name'];
    }else{
        $img=$imgold;
    }

    $btnTipo=$_POST['btnTipo'];
    $btnLink=$_POST['btnLink'];
    $orden=$_POST['orden'];
    $estado=$_POST['estado'];
    if (empty($bg)){
        $param=[
            'ms'=>'Llene todos los campos con asterísco (obligatorio)',
            'clase'=>'alert-danger',
            'alert'=>'Error'

        ];
        header('Location: ../view/desktop/editSlide.php?id='.$id.'&ms='.$param["ms"].'&clase='.$param["clase"].'&alert='.$param["alert"].'');

    }else {
        $slider->setBg($bg);
        $slider->setImg($img);
        $slider->setImgDataX($imgDataX);
        $slider->setImgDataY($imgDataY);
        $slider->setImgDataSpeed($imgDataSpeed);
        $slider->setImgDataStart($imgDataStart);
        $slider->setImgEfecto($imgEfecto);
        $slider->setImgWidth($imgWidth);
        $slider->setImgHeight($imgHeight);
        $slider->setCaption($caption);
        $slider->setCaptionDataX($captionDataX);
        $slider->setCaptionDataY($captionDataY);
        $slider->setCaptionDataSpeed($captionDataSpeed);
        $slider->setCaptionDataStart($captionDataStart);
        $slider->setCaptionEfecto($captionEfecto);
        $slider->setCaption2($caption2);
        $slider->setCaption2DataX($caption2DataX);
        $slider->setCaption2DataY($caption2DataY);
        $slider->setCaption2DataSpeed($caption2DataSpeed);
        $slider->setCaption2DataStart($caption2DataStart);
        $slider->setCaption2Efecto($caption2Efecto);
        $slider->setBtnTexto($btnTexto);
        $slider->setBtnDataX($btnDataX);
        $slider->setBtnDataY($btnDataY);
        $slider->setBtnDataSpeed($btnDataSpeed);
        $slider->setBtnDataStart($btnDataStart);
        $slider->setBtnEfecto($btnEfecto);
        $slider->setBtnTipo($btnTipo);
        $slider->setBtnLink($btnLink);
        $slider->setOrden($orden);
        $slider->setEstado($estado);
        $resul = $slider->update($id);
        $param=[
            'ms'=>'Slide actualizado exitosamente',
            'clase'=>'alert-success',
            'alert'=>'Exito'
        ];

        header('Location: ../view/desktop/editSlide.php?id='.$id.'&ms='.$param["ms"].'&clase='.$param["clase"].'&alert='.$param["alert"].'');

    }
}
    ?>