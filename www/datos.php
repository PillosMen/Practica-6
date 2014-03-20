<?php
define("IVA",0.16);
  
$producto1=$_POST["producto1"];
$precio1=$_POST["precio1"];
$producto2=$_POST["producto2"];
$precio2=$_POST["precio2"];
$producto3=$_POST["producto3"];
$precio3=$_POST["precio3"];

$subtotal=$precio1+$precio2+$precio3;
    $iva=$subtotal*IVA;
    $total=$subtotal+$iva;

?>
<html>
<body>
<table border="1">
<tr>
<td></td>
<td>Producto</td>
<td>Precio</td>
</tr>
<tr>
<td>1</td>
<td><?php echo $producto1 ?></td>
<td><?php echo $precio1 ?></td>
</tr>
<tr>
<td>2</td>
<td><?php echo $producto2 ?></td>
<td><?php echo $precio2 ?></td>
</tr>
<tr>
<td>3</td>
<td><?php echo $producto3 ?></td>
<td><?php echo $precio3 ?></td>
</tr>
<tr>
<td></td>
<td>subtotal</td>
<td><?php echo ("$".$subtotal); ?></td>
</tr>
<tr>
<td></td>
<td>IVA</td>
<td><?php echo ("$".$iva); ?></td>
</tr>
<tr>
<td></td>
<td>total</td>
<td><?php echo ("$".$total); ?></td>
</tr>
</table>
</body>
</html>