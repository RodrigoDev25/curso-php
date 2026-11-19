<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings</title>
</head>
<h1>Manipulação de Strings</h1>

<body>
    <?php
    print "<h2>#Double quoted (Aspas duplas)</h2>";
    $exemple1 = "teste1";
    $exemple2 = 'Elefante \u{1F418}';
     $exemple3 = "Elefante \u{1F418}";
    echo '$exemple1 = "teste1";';
    echo '<br>echo ' . '"$exemple1"' . " = $exemple1";
    echo "<br> ________________";
    print "<h2>#Single quoted (Aspas simples)</h2>";
    echo 'echo ' . "'" . '$exemple1' . "'" . ' = $exemple1';

    print "<h3>Emoji:</h3>";
    echo 'echo ' . "'" . '\u{1F418}' . "'" . "=> " . '\u{1F418}' . "<br>";
    echo 'echo ' . '"' . '\u{1F418}' . '"' . "=> \u{1F418}<br>";

    print "<h3>Mudando aspas na declaração da variável:</h3>";
echo '$exemple2 = ' . "'" . 'Elefante \u{1F418}' . "'<br>";
 echo '$exemple3 = ' . '"' . 'Elefante \u{1F418}' . '"';
    echo "<br>$exemple2 <br>";
    echo "$exemple3<br>";

    echo "____________________________";

    print "<h3>Sequência de escape:</h3>";
    $moto = "GSX";
    $cc = "750";

    echo 'Use o \' \ \' para colocar aspas simples dentro de aspas simples ou aspas duplas dentro de aspas duplas<br>';
    echo "$moto $cc \"SRAD\" <br>";

echo "____________________________";

     print "<h2>#Heredoc</h2>";
     $ano = date ("Y");
     echo <<<TESTE
• Funciona como aspas duplas gigantes: Tudo o que você coloca entre < < < ETIQUETA e ETIQUETA
 vira um texto único, mantendo quebras de linha e aceitando variáveis (como $ano) diretamente no meio da frase.

• Evita escapar aspas: Você pode escrever aspas simples (') e duplas (") livremente dentro do bloco sem quebrar o código PHP . Variavel \$ano ==> $ano
TESTE;

print "<h2>#Nowdoc</h2>";
     echo <<<'TESTE'
O texto aqui dentro é 100% literal.

A variável "$ano" não será substituída pelo valor 2026.
Ela vai aparecer literalmente como "$ano" na tela.
Variavel $ano ==> $ano

TESTE;   
    ?>
</body>

</html>