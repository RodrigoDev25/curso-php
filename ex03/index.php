<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos - PHP</title>
</head>

<body>
    <h1>TESTE DE TIPOS PRIMITIVOS</h1>
    <h2>Tipos Primitivos ESCALARES</h2>
    <?php
    $num1 = 0x1A;
    $num2 = 0b10;
    $num3 = 010;
    $peso = 80.5;
    $potencia1 = 3e2;
    $potencia2 = (int) 3e2;
    $verdadeiro = true;
    $falso = false;

    echo "Valor da variavel \$num1 é '$num1',  porque começa com 0x (0x1A), que representa um número decimal.<br>";

    echo "Valor da variavel \$num2 é '$num2',  porque começa com 0b (0b10), que representa um número binário.<br>";

    echo "Valor da variavel \$num3 é '$num3',  porque começa com 0 ('010'), que representa um número octal.<br>";

    echo "Usando a função var_dump() na variavel '\$peso', tenho as informações dela (tipo/valor): "; var_dump($peso);

    echo "<br> No caso da variável \$potencia1, de valor '3e2' (3x 10²), é lido como sendo float, quando parâmetro da função var_dump(\$potencia1): "; var_dump($potencia1);

    echo "<br> No caso da variável \$pontencia2, ela é forçada (coerção) a se tornar int (da pra fazer com integer também): var_dump(\$potencia2) = "; var_dump($potencia2);
    
    echo "<br> Se eu uso echo ou print para mostrar uma variável boolean, ele me entrega vazio ou 1. Exemplo é a variavel \$Verdadeiro = $verdadeiro. => var_dump(\$verdadeiro): "; var_dump($verdadeiro);

    echo "<br> Outro exemplo é a variavel \$falso = $falso __ . => var_dump(\$falso): "; var_dump($falso);
    ?>

    <h2>Tipos primitivos COMPOSTOS</h2>
    <?php 
    $vet = [2, true, 6, "123456"];

    echo "- ARRAYS: são tipos primitivos COMPOSTOS. Exemplo é o vetor \$vet = [2, 4, 6, 8] => var_dump(\$vet): "; var_dump($vet);

    echo "<br>- OBJECTS: Instâncias de classe. <br>- CALLABLE. <br>- ITERABLE";
    ?>

<h2>Tipos primitivos ESPECIAIS</h2>
- NULL <br>
- RESOURCE
</body>

</html>