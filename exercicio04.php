<!-- ENUNCIADO:
 Leia as medidas dos lados de um triângulo e classifique:
•	Equilátero → 3 lados iguais
•	Isósceles → 2 lados iguais
•	Escaleno → 3 lados diferentes
 -->

<!-- HTML -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
    <link rel="stylesheet" href="estilo.css">
 
</head>
<body>
 
<div class="container">
 
<h2> Triângulo </h2>
 
<form action="" method="post">
 
    <label for="n1"> Digite o 1° lado  </label>
    <input type="number" name="n1" id="n1"><br><br>
 
    <label for="n2"> Digite o 2° lado </label>
    <input type="number" name="n2" id="n2"><br><br>
 
    <label for="n3"> Digite o 3° lado  </label>
    <input type="number" name="n3" id="n3"><br><br>

     <button type="submit">Triângulo </button> <br><br>

</form>

 <!-- PHP - INÍCIO -->
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $n1= $_POST["n1"];
    $n2= $_POST["n2"];
    $n3= $_POST["n3"];
    $contador=0;

 
if($n1 == "" && $n2 == "" && $n3 == ""){
 
    echo "Nenhum valor foi digitado.";
}
else{
 
    if($n1!="" && $n1!=null){
        $contador++;
    }
 
    if($n2!="" && $n2!=null){
        $contador++;
    }
 
     if($n3!="" && $n3!=null){
        $contador++;
    }
}

if ($n1 + $n2 > $n3  && $n1 + $n3> $n2 && $n2+ $n3> $$n1){

  if($contador==1){

        echo" Você digitou apenas um valor "."<br>";
    }

    if($contador==2){

        echo" Você digitou apenas dois valores."."<br>";
    }
 
    if($contador==3){
     
       if($n1 == $n2 && $n1 ==$n3){
        echo "Você digitou 3 lados iguais. Triângulo Equilátero. ";
       }
       else if($n1==$n2 || $n1==$n3){
        echo "Você digitou  2 lados iguais. Triângulo Isósceles.";
       }
       else{
        echo "Você digitou 3 lados diferentes. Triângulo Equilátero.";
       }
    }
    }
    else {
        echo "Os valores digitados ferem a regra para ser um triângulo. Que é: "."<br>"
        ."";
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

<!-- Outra forma de ser feito com menos código

$valores = [$n1, $n2, $n3]; -- ARRAY

foreach ($valores as $n){                 --- Pega os valores digitados e coloca na variável n
    if($n !== "" && $n !== null){         --- Se n for diferente de nulo ou vazio incrementa o contador
     $contador++;
    }
}

-->