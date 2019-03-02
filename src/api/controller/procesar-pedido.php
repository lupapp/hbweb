<?php session_start();
spl_autoload_register(function ($clase) {
    include 'Administer/class/'.$clase.'/'.$clase.'.php';
});
echo '<link type="text/css" data-themecolor="default" rel="stylesheet" href="css/main-cyan.css">
<div id="myLoading" class="myloading" payu-loading="" style="display: block;">
    
        <div class="animate-loading">
            <img class="animate-image" src="https://s02cdn.payulatam.com/4.9.49/app/dist/images/common/loading-.png">
            <!--[if lt IE 9]>
                    <img  src="https://s02cdn.payulatam.com/4.9.49/app/dist/images/common/gif-load.gif" />
            <![endif]-->
        </div>

    <div class="message-loading no-show" style="display: block;">
        <p id="message-loading-text" class="message-loading-text-small ng-binding" style="display: block;"></p>
        <!--[if lt IE 9]>
            <p class="message-loading-text-big browsehappy" style="width: 80%;margin:auto;" translate="index.browser_not_supported">La versión de tu navegador no es la ideal para ver correctamente este portal. Por favor actualiza tu navegador o ingresa al portal desde un navegador diferente.</p>
        <![endif]-->
    </div>
</div>';
echo '<script src="js/jquery/jquery-1.11.1.min.js"></script>';
date_default_timezone_set('America/Bogota');
4Vj8eK4rloUd272L48hsrarnUA~508029~TestPayU~20000~COP
        $sig = "4Vj8eK4rloUd272L48hsrarnUA~508029~TestPayU~" . $total . "~COP";
        $sigMd5 = md5($sig);
        $amount = $total;
       unset($_SESSION['total']);
        echo '<form action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/" method="post" class="formpayu">
        <input name="merchantId"    type="hidden"  value="508029"   >
        <input name="accountId"     type="hidden"  value="512321" >
        <input name="description"   type="hidden"  value="Pago con Payu"  >
        <input name="referenceCode" type="hidden"  value="' . time() . '" >
        <input name="amount"        type="hidden"  value="' . $amount . '"   >
        <input name="tax"           type="hidden"  value="0"  >
        <input name="taxReturnBase" type="hidden"  value="0" >
        <input name="currency"      type="hidden"  value="COP" >
        <input name="signature"     type="hidden"  value="' . $sigMd5 . '"  >
        <input name="buyerFullName"  type="hidden"  value="' . $_SESSION['user']['nombre'] . '">
        <input name="shippingAddress"          type="hidden"  value="' . $_SESSION['user']['direccion'] . '">
        <input name="shippingCity"          type="hidden"  value="' . $_SESSION['user']['ciudad'] . '">
        <input name="shippingCountry"          type="hidden"  value="' . $_SESSION['user']['pais'] . '">
        <input name="telephone"          type="hidden"  value="' . $_SESSION['user']['movil'] . '">
        <input name="buyerEmail"    type="hidden"  value="' . $_SESSION['user']['mail'] . '" >
        <input name="responseUrl"    type="hidden"  value="http://shop.com/index/pedido-finalizado.php" >
        <input name="confirmationUrl"    type="hidden"  value="http://shop.com/index/pedido-finalizado.php" >
        <script>
        $(".formpayu").submit();
        </script>';

?>