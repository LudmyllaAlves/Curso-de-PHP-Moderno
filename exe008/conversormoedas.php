<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../exe004/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Conversor de Moeda</h1>
    <p>
        <?php 
            $valor = $_GET["valor"];
            $resultado = round($valor / 5.22);
            (string)$valor;
            echo "Seus $valor são US$: $resultado <br>";
            echo "Cotação fixa de 5,22";
        ?>
    </p>
</body>
</html>