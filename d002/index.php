<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../exe004/style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Sorteio</h1>
            <?php 
                $sorte = mt_rand(0, 100);
                echo "O numero de hoje é: <strong>$sorte</strong>";
                //rand é a função com o algoritmo mais antigo
                //mt_rand tem a mesma funcionalidade porém é mais moderno e 4x mais rapido
                // a partir do PHP 7.1, a rand() utiliza o mesmo algoritmo
                //rand_int() gera numeros aleatorios criptograficamente seguros
            ?>
            <button onclick="javascript:document.location.reload()">Gerar outro</button>
    </main>
</body>
</html>