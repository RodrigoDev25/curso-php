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
    ?>
</body>

</html>