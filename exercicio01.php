<!--
ENUNCIADO:
A partir da altura e do sexo (1: feminino, 2: masculino), calcule o peso ideal usando:
•	Homens: (72.7 * altura) – 58
•	Mulheres: (62.1 * altura) – 44.
 -->

<!-- HTML -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
    <link rel="stylesheet" href="estilo.css">
 
</head>
<body>
 
<div class="container">
 
<h2> Peso Ideal </h2>
<form action="" method="post">
    <label for="alt"> Digite sua altura. </label>
    <input type="number" name="alt" id="alt" step="0.01" required><br><br>
   
 
    <select name="sx" id="sx" >
     <option value="sxfem"> Feminino</option>
     <option value="sexmasc">Masculino</option>
    </select>
    <br><br><br>
 
    <button type="submit">Peso Ideal</button> <br><br>
 
</form>
 
<!-- PHP - INÍCIO -->
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $alt= $_POST["alt"];
    $sx= $_POST["sx"];
   
if($sx =="sxfem"){
   $ideal = 62.1 * $alt - 58;
   
    echo "O peso ideal para sua altura é: ".$ideal." Kilos";
}
else{
    $ideal=72.1 * $alt - 58;
 
    echo "O peso ideal para sua altura é:  ".$ideal." Kilos";
}
}
?>
<!-- PHP - FIM -->
</div>
<!-- RODAPÉ -->
<footer>
    Exercício realizado por Juliana N. Santos
</footer>

</body>

</html>