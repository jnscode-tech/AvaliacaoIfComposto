<!-- ENUNCIADO:
Um posto está vendendo combustíveis com a seguinte tabela de descontos:   

Álcool: 
Até 20 litros: desconto de 3% por litro 
Acima de 20 litros: Desconto de 5% por litro 
 
Gasolina: 
Até 20 litros: desconto de 4% por litro 
Acima de 20 litros, desconto de 6% por litro 

Escreva um algoritmo que leia o número de litros vendidos, o tipo de combustível (codificado da seguinte forma: A-álcool. G-gasolina), 
calcule e imprima o valor a ser pago pelo cliente.  
 

-->

<!-- HTML -->

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08</title>
    <link rel="stylesheet" href="estilo.css">

</head>

<body>

    <div class="container">

    <h2> COMBUSTÍVEL </h2>

    <form action="" method="post">

    <label for="qtComb"> Digite quantidade em litros de combustível:  </label>
    <input type="number" name="qtComb" id="qtComb" min="1" ><br><br>


    <select name="combustivel" id="combustivel" >
    <option value="alcool"> ALCOOL</option>
    <option value="gasolina">GASOLINA</option>
    </select>

     <button type="submit"> CALCULAR </button> <br><br>

        </form>

        <!-- PHP - INÍCIO -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $qtComb= $_POST["qtComb"];
    $combustivel= $_POST["combustivel"];
    $precoGasolina = 4.65;
    $precoAlcool = 3.70;



    
    if($combustivel == "alcool"){

        if($qtComb <=20){
            $valorTotalAl = $qtComb * $precoAlcool;
            $descontoAl = $valorTotalAl * 0.03;
            $valorFinalAl = $valorTotalAl - $descontoAl;
            echo "<strong>Valor do Alcool é de R$3.70.</strong>"."<br>"."Com a quantidade que você digitou ganhará 3% de desconto.". "<br>"
            ."<strong>O valor final ficará R$".$valorFinalAl."</strong>";
        }
        else{
            $valorTotalAl = $qtComb * $precoAlcool;
            $descontoAl = $valorTotalAl * 0.05;
            $valorFinalAl = $valorTotalAl - $descontoAl;
            echo "<strong> Valor do Alcool é de R$3.70.</strong>"."<br>"."Com a quantidade que você digitou ganhará 5% de desconto". "<br>"
            ."<strong> O valor final ficará R$".$valorFinalAl."</strong>";
        }

    }    
    if($combustivel == "gasolina"){

        if($qtComb <=20){
            $valorTotalGas = $qtComb * $precoGasolina;
            $descontoGas = $valorTotalGas * 0.04;
            $valorFinalGas = $valorTotalGas - $descontoGas;
            echo "<strong> Valor da Gasolina é de R$4.65.</strong>"."<br>"."Com a quantidade que você digitou ganhará 4% de desconto". "<br>"
            ." <strong> O valor final ficará R$".$valorFinalGas."</strong>";
        }
        else{
            $valorTotalGas = $qtComb * $precoGasolina;
            $descontoGas = $valorTotalGas * 0.06;
            $valorFinalGas = $valorTotalGas - $descontoGas;
            echo "<strong> Valor do Alcool é de R$4.65.</strong>"."<br>"."Com a quantidade que você digitou ganhará 5% de desconto". "<br>"
            ."<strong> O valor final ficará R$".$valorFinalGas."</strong>";
        }

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
