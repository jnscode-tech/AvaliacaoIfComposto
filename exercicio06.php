<!-- ENUNCIADO:
Uma empresa resolveu dar um aumento de salário aos seus colaboradores e lhe contrataram para
desenvolver o programa que calculará os reajustes. Faça um programa que recebe o salário 
de um colaborador e o reajuste segundo o seguinte critério, baseado no salário atual; 
•	a. Salários até R$ 280,00 (incluindo): aumento de 20%; 
•	b. Salários entre R$ 280,00 e R$700,00: aumento de 15%; 
•	c. Salários entre R$ 700,00 e R$ 1500,00: aumento de 10%; 
•	d. Salários de R$ 1500,00 em diante: aumento de 5% 
Após o aumento ser realizado; informe na tela; 
•	a. O salário antes do reajuste; 
•	b. O percentual de aumento aplicado; 
•	c. O valor do aumento; 
•	d. O novo salário, após o aumento.   
-->

<!-- HTML -->

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06</title>
    <link rel="stylesheet" href="estilo.css">

</head>

<body>

    <div class="container">

        <h2> REAJUSTE DE SALÁRIO </h2>

        <form action="" method="post">

            <label for="salario"> Digite o valor do seu salário: </label>
            <input type="number" name="salario" id="salario"><br><br>

            <button type="submit"> Calcular </button> <br><br>

        </form>

        <!-- PHP - INÍCIO -->
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $salario = $_POST["salario"];
   
            $percentual5 = "5%";
            $percentual10 = "10%";
            $percentual15 = "15%";
            $percentual20 = "20%";
            

            if ($salario<=280){

                $salarioatual = $salario * 1.20;
                $aumento = $salarioatual - $salario;

                /* colocar o resultado em tabela - table - tr = linha th= coluna */
                echo
                "<table>

                <tr>
                <th> Salário Anterior </th> 
                <th> Percentual aplicado </th> 
                <th> Aumento</th>  
                <th> Salário Atualizado</th>  
                </tr>

                <tr>
                <th> R$ $salario </th> 
                <th> $percentual20</th> 
                <th> R$ $aumento</th>  
                <th> R$ $salarioatual</th>  
                </tr>
                
                </table>";

            }

         elseif($salario>280 && $salario<=700){

                $salarioatual = $salario * 1.15;
                $aumento = $salarioatual - $salario;

                /* colocar o resultado em tabela - table - tr = linha th= coluna */
                echo
                "<table>

                <tr>
                <th> Salário Anterior </th> 
                <th> Percentual aplicado </th> 
                <th> Aumento</th>  
                <th> Salário Atualizado</th>  
                </tr>

                <tr>
                <th> R$ $salario </th> 
                <th> $percentual15</th> 
                <th> R$ $aumento</th>  
                <th> R$ $salarioatual</th>  
                </tr>
                
                </table>";

            }    

                elseif($salario>700 && $salario<=1500){

                $salarioatual = $salario * 1.10;
                $aumento = $salarioatual - $salario;

                /* colocar o resultado em tabela - table - tr = linha th= coluna */
                echo
                "<table>

                <tr>
                <th> Salário Anterior </th> 
                <th> Percentual aplicado </th> 
                <th> Aumento</th>  
                <th> Salário Atualizado</th>  
                </tr>

                <tr>
                <th> R$ $salario </th> 
                <th> $percentual10</th> 
                <th> R$ $aumento</th>  
                <th> R$ $salarioatual</th>  
                </tr>
                
                </table>";

            }
    
                elseif($salario>1500){

                $salarioatual = $salario * 1.05;
                $aumento = $salarioatual - $salario;

                /* colocar o resultado em tabela - table - tr = linha th= coluna */
                echo
                "<table>

                <tr>
                <th> Salário Anterior </th> 
                <th> Percentual aplicado </th> 
                <th> Aumento</th>  
                <th> Salário Atualizado</th>  
                </tr>

                <tr>
                <th> R$ $salario </th> 
                <th> $percentual5</th> 
                <th> R$ $aumento</th>  
                <th> R$ $salarioatual</th>  
                </tr>
                
                </table>";

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
