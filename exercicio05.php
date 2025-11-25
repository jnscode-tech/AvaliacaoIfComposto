<!-- ENUNCIADO:
 Receba idade e o valor do ingresso:
•	< 12 → paga meia - mostre o valor;
•	12 a 59 → paga inteira- mostre o valor;
•	≥ 60 → desconto de 30% - mostre o valor

-->
<!-- HTML -->

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
    <link rel="stylesheet" href="estilo.css">

</head>

<body>

    <div class="container">

        <h2> INGRESSO </h2>

        <form action="" method="post">

            <label for="idade"> Digite sua idade: </label>
            <input type="number" name="idade" id="idade" min="0" max="120"><br><br>

            <label for="valor"> Digite o valor do ingresso: </label>
            <input type="number" name="valor" id="valor"><br><br>

            <button type="submit">Valor Final </button> <br><br>

        </form>

        <!-- PHP - INÍCIO -->
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $idade = $_POST["idade"];
            $valor = $_POST["valor"];


            if ($idade < 12) {
                $ingresso = $valor / 2;
                echo "Meia entrada. O valor a ser pago é: "."<br>"."R$ ".$ingresso;
   

            }
            else if($idade>12 && $idade<=59){
                echo "Inteira. O valor a ser pago é: "."<br>"."R$" .$valor;
            }
            else {

                $ingresso = $valor * 0.70;
                echo "Desconto de 30%. O valor a ser pago é:  "."<br>"." R$ ". $ingresso;

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
