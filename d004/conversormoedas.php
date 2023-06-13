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
            $inicio= date("m-d-Y", strtotime("-7 days"));
            $fim= date("m-d-Y");
            $url= 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            
            
            $valor = $_GET["valor"];
            $resultado = round($valor / $cotacao);
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            /*echo "Seus ".number_format($valor, 2, ",", ".").  "são US$:". number_format($resultado, 2, ",", ".")  . "<br>";*/
            echo "Seus ".numfmt_format_currency($padrao, $valor, "BRL").  " são <strong>".numfmt_format_currency($padrao, $resultado, "USD") . "</strong><br>";
            echo "Cotação fixa de ".numfmt_format_currency($padrao, $cotacao, "USD");
        ?>
    </p>
    <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>
</html>