<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <headedr>
        <h1>Result</h1>
    </headedr>
    <section>
        <?php 
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'10-24-2024\'&@dataFinalCotacao=\'10-31-2024\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra';

            $money = $_POST["money"] ?? 0;
            $dados = json_decode(file_get_contents($url), true);
            $cot = $dados["value"][0]["cotacaoCompra"];
            $result = number_format($money / $cot,2, ",", ".");

            echo "Com seus BRL $money, Você Pode Comprar US$ $result <br> Fonte:"
        ?>
        <a href="https://www.bcb.gov.br">bcb.gov.br</a>
    </section>
</body>
</html>