<?php
ini_set('date.timezone','America/Bogota'); 


$asunto='CAPACITACION Y ACTUALIZACION ULTIMA REFORMA TRIBUTARIA LEY DE FINANCIAMIENTO';
//if($rec!=''){
    
$from  = 'MIME-Version: 1.0' . "\r\n";
$from .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$from .= 'To: capacitaciones@hectorbarreralopez.com' . "\r\n";
$from .= 'From: Do_Not_reply@hectorbarreralopez.com' . "\r\n";

$mensaje = "<h2>Ha sido inscrito: ".$asunto."</h2>
<p><strong>Enviado por:</strong> " . $nombre . " </p>
<p><strong>".$tipod.":</strong> " . $documento . " </p>
<p><strong>E-mail:</strong> " . $email . " </p> 
<p><strong>Celular:</strong> ".$celular." </p>
<p><strong>Fecha:</strong> " . date('d/m/Y', time())."</p>
<p><strong>Valor del curso: </strong> $250.000 + IVA <a href='https://biz.payulatam.com/L0c16aaB780ABE2' style='padding: 16px 46px;
    border: 2px solid #06864b;
    border-radius: 50px;
    font-size: 18px;
    font-weight: bold;
    line-height: 1;'>Pago en linea</a>";

$para = 'capacitaciones@hectorbarreralopez.com,'.$email;
$asunto = 'INSCRITO '.$asunto.'';

mail($para, $asunto, utf8_decode($mensaje), $from);
       
echo '<body>
	<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=https://www.hectorbarreralopez.com"> 
	<center style="margin-top:100px; color:green"><h1>Ha sido inscrito exitosamente</center></h1>
</body>';
/*}else{
    echo '.g-recaptcha';
}*/
?>