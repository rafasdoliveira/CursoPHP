<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>
            Conversão Dólar - Via BBC
        </h1>
    </header>
    <main>
        <?php 
            $inicio = date("m-d-Y", strtotime("- 7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $real = $_GET["inReal"] ?? "Informe o valor que deseja converter";
            $conversao = $real * $cotacao;
            echo("Seus <strong>R$ $real</strong> são equivalentes a <strong>U$ $conversao</strong></br>");
            echo("<br>Cotação realizada <em>$fim</em> via <strong>Banco Central do Brasil</strong>")
        ?>
    </main>
</body>
</html>