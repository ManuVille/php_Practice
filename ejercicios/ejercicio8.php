<?php

  if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];


   //Operador Suma
    $suma=$valorA+$valorB;
    //Operador Resta
    $resta=$valorA-$valorB;
    //Operador Division
    $div=$valorA/$valorB;
    //Operador Multiplicacion
    $mul=$valorA*$valorB;

    echo "<br/>".$suma;
    echo "<br/>".$resta;
    echo "<br/>".$div;
    echo "<br/>".$mul;
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>
<body>
    
   <form action="ejercicio8.php" method="post">
    Valor A:
    <input type="text" name="valorA">
    <br/>
    Valor B:
    <input type="text" name="valorB">
    <br/>
    <input type="submit" value="Calcular">

   </form>

</body>
</html>