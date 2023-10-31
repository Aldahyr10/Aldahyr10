<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>Bienvenido a PHP</h1>
    <img src="img/uno.jpg">
    <br>
<?php echo "hola Zeya";?>
<br><br>
<label>Ingrese nombre:</label>
<input type="text" name="txtNom">
<label><?php echo "queeeeee";?></label>
<?php 
   $num1=10;
   $num2=7;
   $c=$num1+$num2;
   echo"Resultado de". $num1."+".$num2."=".$C; 
?>
<br><br><br>
<table width="50%" border class="default">

<tr>

  <td>Celda 1</td>

  <td>Celda 2</td>

  <td>Celda 3</td>

</tr>

<tr>

  <td>Celda 4</td>

  <td>Celda 5</td>

  <td>Celda 6</td>

</tr>
</table>

</body>
</html>