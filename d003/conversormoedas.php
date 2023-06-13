<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../exe004/style.css">
    <title>Document</title>
</head>
<body>
    <main>
    <h1>Conversor de Moeda</h1>
    <p>
        <?php 
            $valor = $_GET["valor"];
            $resultado = round($valor / 4.86);
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            /*echo "Seus ".number_format($valor, 2, ",", ".").  "são US$:". number_format($resultado, 2, ",", ".")  . "<br>";*/
            echo "Seus ".numfmt_format_currency($padrao, $valor, "BRL").  " são <strong>".numfmt_format_currency($padrao, $resultado, "USD") . "</strong><br>";
            echo "Cotação fixa de 5,22";
        ?>
    </p>
    <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>
</html>