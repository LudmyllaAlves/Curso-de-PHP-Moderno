<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões</title>
</head>
<body>
    <h1>Expressões:</h1>
    <?php 
        /*orden de precedencia
        antes de todos () não operador mas é ele quem resolve
        1 ** = potencia
        2 *, /, % 
        3 + - todas da esquerda para direita */
        //$exp = 50 / (2 + 3) ** 2;
        $exp = 75/(2+3)**2;
        echo "$exp";
    ?>
</body>
</html>