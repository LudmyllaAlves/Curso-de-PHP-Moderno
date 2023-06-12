<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../exe004/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Sorteio</h1>
    <p>
        <?php 
            $sorte = rand(0, 100);
            echo "O numero de hoje é: $sorte";
        ?>
        <button>Gerar outro</button>
    </p>
</body>
</html>