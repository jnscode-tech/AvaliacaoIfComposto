<!-- ENUNCIADO:
Faça um programa que faça 5 perguntas para uma pessoa sobre um crime. As perguntas são: 
“Telefonou para a vítima? “ 
“Esteve no local do crime?” 
“Mora perto da vítima? “ 
“Devia para a vítima? “ 
“Já trabalhou com a vítima? “ 
O programa deve no final emitir uma classificação sobre a participação da pessoa no crime. 
Se a pessoa responder positivamente a 2 questões ela deve ser classificada como “Suspeita”, 
entre 3 e 4 como “Cúmplice” e 5 como “Assassino“. 
Caso contrário, ele será classificado como “Inocente“. 

-->

<!-- HTML -->

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
    <link rel="stylesheet" href="estilo.css">

</head>

<body>

    <div class="container">

    <h2> DESVENDANDO UM CRIME </h2>

    <form action="" method="post">

    <label for="q1"> Telefonou pra vítima? </label>
    <select name="q1" id="q1" >
    <option value="sim"> SIM</option>
    <option value="não">NÃO</option>
    </select>

    <label for="q2"> Esteve no local do crime? </label>
    <select name="q2" id="q2" >
    <option value="sim"> SIM</option>
    <option value="não">NÃO</option>
    </select>

    <label for="q3"> Mora perto da vítima? </label>
    <select name="q3" id="q3" >
    <option value="sim"> SIM</option>
    <option value="não">NÃO</option>
    </select>

    <label for="q4"> Devia para a vítima? </label>
    <select name="q4" id="q4" >
    <option value="sim"> SIM</option>
    <option value="não">NÃO</option>
    </select>


    <label for="q5"> Já trabalhou com a vítima? </label>
    <select name="q5" id="q5" >
    <option value="sim">SIM</option>
    <option value="não">NÃO</option>
    </select>
    <br><br><br>
     <button type="submit"> RESPOSTA </button> <br><br>

        </form>

        <!-- PHP - INÍCIO -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $q1= $_POST["q1"];
    $q2= $_POST["q2"];
    $q3= $_POST["q3"];
    $q4= $_POST["q4"];
    $q5= $_POST["q5"];
    $contador = 0;

    if($q1 == "sim"){
        $contador++;
    }
    if($q2 == "sim"){
        $contador++;
    }
    if($q3 == "sim"){
        $contador++;
    }
    if($q4 == "sim"){
        $contador++;
    }
    if($q5 == "sim"){
        $contador++;
    }
  
    if($contador == 2){

        echo "<strong><span style='color:orange;font-size:20px'> Pessoa Suspeita </span></strong>";
    }
    else if($contador == 3 || $contador == 4){
        echo "<strong><span style='color:green;font-size:20px'> Cúmplice </span></strong>";

    }
    else if($contador == 5){
        echo "<strong><span style='color:red;font-size:24px'> ASSASSINO (A) </span></strong>";
    }
    else{
     echo "<strong><span style='color:blue;font-size:24px'> INOCENTE</span></strong>";
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
