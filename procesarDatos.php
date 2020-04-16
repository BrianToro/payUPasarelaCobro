<?php
    // Recibe atravez del metodo POST los datos que vienen del formulario
    $amount = $_POST['valor'];
    $buyerEmail = $_POST['email'];
    $buyerFullName = $_POST['nombre'];
    $shippingAddress  = $_POST['direccion'];
    $shippingCity = $_POST['ciudad'];
    $shippingCountry = $_POST['pais'];
    $telephone  = $_POST['telefono'];

    //Rellenar este campo con los datos de acceso
    $merchantId = '';
    $ApiKey =  '';
    $accountId = '';


    $description = 'Pago Nueva Piel SPA';
    $tax = '0';
    $taxReturnBase = '0';
    $currency = 'COP';
    $test = '0'; // 1. para modo test 0. para el modo produccion
    $responseUrl = 'http://localhost/payu/respuesta.php'; //Cambiar localhost por URL de la pagina
    $confirmationUrl = 'http://localhost/payu/informacion.php'; //Cambiar localhost por URL de la pagina
    $referenceCode = date('c', time()).$buyerFullName; //Referencia de compra de tipo YYYY-MM-DD+T+HH:MM+SS:MS . NOMBRE CLIENTE

    //Informacion de verificacion
    echo 'Referencia de compra: '.$referenceCode.'</br>';
    echo 'Valor de la compra: '.' '.$amount;

    //Algoritmo de cifrado para la firma
    $signature = md5($ApiKey.'~'.$merchantId.'~'.$referenceCode.'~'.$amount.'~'.$currency)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- formulario de confirmacion de compra -->
    <form method="post" action="https://checkout.payulatam.com/ppp-web-gateway-payu/">
        <input name="merchantId" type="hidden" value="<?php echo $merchantId ?>">
        <input name="accountId" type="hidden" value="<?php echo $accountId ?>">
        <input name="description" type="hidden" value="<?php echo $description ?>">
        <input name="referenceCode" type="hidden" value="<?php echo $referenceCode ?>">
        <input name="amount" type="hidden" value="<?php echo $amount ?>">
        <input name="tax" type="hidden" value="<?php echo $tax ?>">
        <input name="taxReturnBase" type="hidden" value="<?php echo $taxReturnBase ?>">
        <input name="currency" type="hidden" value="<?php echo $currency ?>">
        <input name="signature" type="hidden" value="<?php echo $signature ?>">
        <input name="test" type="hidden" value="<?php echo $test ?>">
        <input name="buyerEmail" type="hidden" value="<?php echo $buyerEmail ?>">
        <input name="buyerFullName" type="hidden" value="<?php echo $buyerFullName ?>">
        <input name="telephone" type="hidden" value="<?php echo $telephone ?>">
        <input name="shippingAddress" type="hidden" value="<?php echo $shippingAddress ?>">
        <input name="responseUrl" type="hidden" value="<?php echo $responseUrl ?>">
        <input name="confirmationUrl" type="hidden" value="<?php echo $confirmationUrl ?>">
        <input name="Submit" type="submit" value="Confirmar compra">
    </form>

</body>

</html>