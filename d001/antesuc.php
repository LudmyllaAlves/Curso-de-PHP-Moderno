<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../exe004/style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Resposta</h1>
        <p>
            <?php 
            $numero = $_GET["numero"];
            $sucessor = $numero + 1;
            $antecessor = $numero - 1;
            echo "O numero escolhido foi: <strong>$numero</strong> <br>";
            echo "O antecessor é: $antecessor <br>";
            echo "O sucessor é: $sucessor";
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
</body>
</html>