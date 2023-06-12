<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <h1>String</h1>
    <?php 
        $ano = (int) "2023";
        echo"curso " . "php ";
        echo '$ano ';
        echo "$ano \u{1F596}";
        echo "ano:" . date('Y' );
        var_dump($ano);
        /* "" interpreta '' apenas lê */;

        $nome = "Rodrigo";
        $sobrenome = "Nogueira";

        echo "$nome  \"Minotauro\" $sobrenome";
        /* \t = tabulação funciona apenas fora do modo HTML*/
        $canal = "Curso em Video";
        $ano = date('Y');
        /*nowdoc não aceita interpretação
        herdoc aceita de tudo e contem interpretação*/
    ?>
</body>
</html>