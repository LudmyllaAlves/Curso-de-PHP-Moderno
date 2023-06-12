<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    <h1>Tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal 0b= binario 0 = octal
        // $num = 0x10A;
        // echo "$num";

        $v = "Ludmylla";
        var_dump($v);

        $n = 3e2;
        echo "$n ";

        $num2 = (float) " 930";
        var_dump($num2);

        $vet = [10, "João", 1.5, false];
        var_dump($vet);

        class Pessoa{
            private $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>