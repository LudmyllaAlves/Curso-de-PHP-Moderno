<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>
    <h1>Exemplo</h1>
    <?php 
        $nome = "Ludmylla Alves";
        echo "<p> O meu nome é $nome </p>";
    ?>
    <p>
        <?= "Tenho 22 anos";?>
    </p>
    <h2>
        <?php 
            date_default_timezone_set("America/Sao_Paulo");
            echo "Hoje é dia " .date("d/M/Y");
            echo" e a hora é " .date("G:i:s");
        ?>
    </h2>
</body>
</html>