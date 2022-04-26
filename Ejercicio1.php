<html>
    <head>
        <title>
            Ejercicio 1
        </title>
</head>
<body>
    <form method="get" action="">
        Importación del total vendido del mes <br><input type="text" name="val1"><br>
        Número de hijos en edad escolar <br><input type="text" name="val2"><br>
        <br><input type="submit" value="Calcular"><br>
</form>
<?php
if(isset($_GET['val1']))
$importe=$_GET['val1'];
if(isset($_GET['val2']))
$hijos =$_GET['val2'];
if(isset($importe) && isset($hijos)){
$comision = 0.075 * $importe;
$bonificacion = 50 * $hijos;
$sueldo_bruto = 600 + $comision + $bonificacion;
$descuento = 0.11 * $sueldo_bruto;
$sueldo_neto = $sueldo_bruto - $descuento;
echo "Comision : " .$comision ."<br>";
echo "Bonificacion : " .$bonificacion."<br>";
echo "Sueldo bruto : " .$sueldo_bruto."<br>";
echo "Descuento : " .$descuento."<br>";
echo "Sueldo neto de un vendedor : " .$sueldo_neto."<br>";
}
?>
</body>
    </html>