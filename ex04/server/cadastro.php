<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastros</title>
    <link rel="stylesheet" href="style-cadastro.css">
</head>

<body>
    <!-- !empty porque, por padrão, inputs de entrada textual/escalar envia "". 
    #"$$": operadores de coalescência nula (quando input vier "null")-->
    <?php

    $nome = !empty($_GET["nome"]) ? $_GET["nome"] : "Sem nome";
    $sobreNome = !empty($_GET["sobrenome"]) ? $_GET["sobrenome"] : "- Sem sobrenome";

    echo $nome . " " . $sobreNome;
    ?>

    <a href="../index.html">
        <h2>Voltar para o formulário</h2>
    </a>

</body>

</html>