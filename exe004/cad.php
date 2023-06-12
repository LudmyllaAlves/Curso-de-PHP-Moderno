<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
            //$_request é a junção de get, post e cookies
            $nome = $_GET["nome"] ?? "sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
            echo "<h2>Bem vindo $nome $sobrenome!!!</h2>";
        ?>
    </main>
    <br>
    <a href="javascript:history.go(-1)">Voltar para pagina anterior</a>
</body>
</html>