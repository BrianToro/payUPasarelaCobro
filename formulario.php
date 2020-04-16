<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario pago</title>
</head>

<body>
    <!-- formulario con los datos del cliente -->
    <form method="post" action="/payu/procesarDatos.php">
        <input type="text" name="nombre" placeholder="Nombre Completo">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="telefono"  placeholder="Ingrese su telefono"> 
        <input type="text" name="direccion"  placeholder="Direcction">
        <input type="text" name="ciudad" placeholder="Ciudad">
        <input type="text" name="pais" placeholder="Pais">
        <input type="text" id="cobrar" name="valor" placeholder="Ingrese el monto">
        <input id="cobro" name="Submit" type="submit" value="Pagar">
    </form>
    
    <script>
    </script>
</body>

</html>