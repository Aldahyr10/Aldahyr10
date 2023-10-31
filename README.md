<?php
$cliente = "Messi";
$productos = "Pupos";
$canti = 2;
$precio = 10.00;
$subTot = $canti * $precio;
$iva = $subTot * 0.12;
$desc = 0;
$regalo = "0";
if ($subTot <= 50) {
    $desc = $subTot * 0.5;
    $regalo = "balòn";
} else {
    if ($subTot <= 51 && $subTot >= 100) {
        $desc = $subTot * 0.7;
        $regalo = "guantes de arquero";
    } else {
        if ($subTot <= 101 && $subTot >= 200) {
            $desc = $subTot * 0.10;
            $regalo = "pupillos";
        } else {
            if ($subTot > 200) {
                $desc = $subTot * 0.15;
                $regalo = "botella de futbol club barcelona";
            }
        }
    }
}

$totpagar = $subTot + $iva + $desc;
?>
<label> Resultados</label><br>
<label> Cliente :</label> <?php echo $cliente; ?><br>
<label> Productos :</label> <?php echo $productos; ?><br>
<label> Regalo :</label> <?php echo $regalo; ?><br>
<label> total a pagar :</label> <?php echo $subTot; ?><br>
