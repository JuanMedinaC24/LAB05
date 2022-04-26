<html>
    <head>
        <title>
            Ejercicio 2
        </title>
</head>
<body>
    <form method="get" action="">
        Precio de la gaseosa <br><input type="text" name="val1"><br>
        Cantidad de las unidades adquiridas <br><input type="text" name="val2"><br>
        <br><input type="submit" value="Calcular"><br>
</form>
<?php
if(isset($_GET['val1']))
$precio=$_GET['val1'];
if(isset($_GET['val2']))
$unidades =$_GET['val2'];
if(isset($precio) && isset($unidades)){
$importe_compra = $precio - (0.05 * $precio);
$importe_descuento = 0.07 * $importe_compra;
$importe_pagar = $importe_compra - $importe_descuento;
$nuevo_precio = $importe_compra - $importe_descuento;
$obsequio = 2 * $unidades;
echo "Importe de la compra : " .$importe_compra ."<br>";
echo "Importe del descuento : " .$importe_descuento."<br>";
echo "Importe a pagar : " .$importe_pagar."<br>";
echo "Nuevo precio : " .$nuevo_precio."<br>";
echo "Cantidad de caramelos de obsequio : " .$obsequio."<br>";
}
?>
</body>
    </html>