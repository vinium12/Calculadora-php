<?php

$n1=0;
$n2=0;
$result=0;
$cal='somar';
    if (isset($_GET['n1'], $_GET['n2'], $_GET['calcular'])){
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $cal=$_GET['calcular'];

        switch ($cal) {

            case 'somar':
            $result = $n1 + $n2; 
                break;
            case 'subtrair':
            $result = $n1 - $n2; 
                break;
            case 'dividir':
            $result = $n1 / $n2; 
                break;
            case 'multiplicar':
            $result = $n1 * $n2; 
                break;
    
        }
}   
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
 <form>
   <p>Primeiro Número</p>
    <Input type="number" name="n1" required value=<?=$n1?>><br>
   <p>Segundo Número</p> 
    <Input type="number" name="n2" required value=<?=$n2?>><br>
    <select name="calcular">
        <option value="somar">Somar</option>
        <option value="subtrair">Subtrair</option>
        <option value="dividir">Dividir</option>
        <option value="multiplicar">Multiplicar</option>
    </select>
    <br><br>
    <input type="submit" value= Calcular>
    <br><br>
    <p>Resultado:<?=$result?></p>
 </form>
</body>
</html>
