<?php
ini_set('date.timezone','America/Bogota'); 

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$documento = $_POST['documento'];
$tipod = $_POST['tipod'];
$celular=$_POST['celular'];
$asunto='CAPACITACIÓN Y ACTUALIZACIÓN ULTIMA REFORMA TRIBUTARIA LEY DE FINANCIAMIENTO';
//if($rec!=''){
    
$from  = 'MIME-Version: 1.0' . "\r\n";
$from .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$from .= 'To: elespigal@hotmail.com' . "\r\n";
$from .= 'From: Do_Not_reply@elespigal.com' . "\r\n";

$mensaje = "<h2>Ha sido inscrito: ".$asunto."</h2>
<p><strong>Enviado por:</strong> " . $nombre . " </p>
<p><strong>".$tipod.":</strong> " . $documento . " </p>
<p><strong>E-mail:</strong> " . $email . " </p> 
<p><strong>Celular:</strong> ".$celular." </p>
<p><strong>Fecha:</strong> " . date('d/m/Y', time())."</p>";


$para = 'capacitaciones@hectorbarreralopez.com';
$asunto = 'Inscripción '.$asunto.'';

mail($para, $asunto, utf8_decode($mensaje), $from);
       

/*}else{
    echo '.g-recaptcha';
}*/
?>