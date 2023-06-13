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
            $num = $_GET['numero'] ?? 0;
            echo "Alinalizando numero <strong>" .number_format($num, 3, ",", ".");
            echo "</strong>" ;
            $int = (int) $num;
            $fra = $num - $int;

            echo"<ul><li> Parte inteira:<strong>".number_format($int, 0, ",", ".")."</strong></li>";
            echo"<li>Parte fracionaria: <strong>".number_format($fra, 3, ",", ".")."</strong></li></ul>"
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>
</html>