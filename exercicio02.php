<!--
ENUNCIADO:
Desenvolva um aplicativo em php onde o usuario poderá inserir até 5 lados (insera o tamanho em cm) e calcule abaixo:
obs: coloque não obrigatório os campos;
Mostre:
•	Se lados = 3 → TRIÂNGULO e calcule a área.
•	Se lados = 4 → QUADRADO e calcule a área.
•	Se lados = 5 → PENTÁGONO.

 -->

<!-- HTML -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
    <link rel="stylesheet" href="estilo.css">
 
</head>
<body>
 
<div class="container">
 
<h2> Forma Geométrica - Parte I </h2>
 
<form action="" method="post">
 
    <label for="n1"> Digite o 1° valor em cm:  </label>
    <input type="number" name="n1" id="n1"><br><br>
 
    <label for="n2"> Digite o 2° valor em cm:  </label>
    <input type="number" name="n2" id="n2"><br><br>
 
    <label for="n3"> Digite o 3° valor em cm:  </label>
    <input type="number" name="n3" id="n3"><br><br>
 
    <label for="n4"> Digite o 4° valor em cm:  </label>
    <input type="number" name="n4" id="n4"><br><br>
 
    <label for="n5"> Digite o 5° valor em cm:  </label>
    <input type="number" name="n5" id="n5"><br><br>
   
    <button type="submit">Calcule </button> <br><br>
 
</form>

<!-- PHP - INÍCIO -->
 
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $n1= $_POST["n1"];
    $n2= $_POST["n2"];
    $n3= $_POST["n3"];
    $n4= $_POST["n4"];
    $n5= $_POST["n5"];
    $contador=0;


 
if($n1 == "" && $n2 == "" && $n3 == ""&& $n4 == ""&& $n5 == "" ){
 
    echo "Não houve valor digitado.";
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
    if($n4!="" && $n4!=null){
        $contador++;
    }
    if($n5!="" && $n5!=null){
        $contador++;
    }

    if($contador==1){

        echo" Você digitou apenas um valor "."<br>";
    }

    if($contador==2){

        echo" Você digitou apenas dois valores "."<br>";
    }
 
    if($contador==3){
        $area = $n1 * $n2/2;
 
        echo" Você digitou 3 valores. ". " A área do triângulo é:  ".$area."<br>";
 
    }
    if($contador == 4){
 
        if($n1==$n2 && $n1==$n3 && $n1==$n4){

        $areaquad = $n1 ** 2;
        echo"Foi digitado 4 lados iguais, tornando isso num quadrado."."<br>";
        echo "A área do quadrado é: ".$areaquad."<br>";
   
    }
    else{
        echo "Não é um quadrado".$quadrado."<br>";
    }
}
 
}
if($contador == 5){
 
    echo "Os 5 valores foram digitados, sendo assim temos um pentagono"."<br>";
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

$valores = [$n1, $n2, $n3, $n4, $n5]; -- ARRAY

foreach ($valores as $n){                 --- Pega os valores digitados e coloca na variável n
    if($n !== "" && $n !== null){         --- Se n for diferente de nulo ou vazio incrementa o contador
     $contador++;
    }
}

-->