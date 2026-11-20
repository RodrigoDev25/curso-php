<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data📅-Hora🕐-PHP🐘</title>
</head>
<body>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); #Timezone do servidor confidurado para fuso horário de SP
       print "Data formato 1-> " . date ("D/M/Y")."<br>";#ponto concatena/<br> pula linha
       echo "Data formato 2-> " . date ("d/m/y")."<br>";
       echo "Hora 24h(0 a 23)-> ".date("G:i:s")."<br>";
       echo "Hora 12h (1 a 12)-> ".date("g:i:s");
    ?>
</body>
</html>