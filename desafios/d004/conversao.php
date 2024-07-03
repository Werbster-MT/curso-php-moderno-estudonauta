<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <p>
            <?php
                $num = $_GET["num"] ?? 0;
                
                $ini = date("m-d-Y", strtotime("-7 days"));
                $fim = date("m-d-Y"); 
            
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$ini.'\'&@dataFinalCotacao=\'' .$fim. '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao';    
                $dados = json_decode(file_get_contents($url), true);

                // Cotação da API do Banco Central
                $cotacao = $dados["value"][0]["cotacaoCompra"]; 

                $real = $_GET["din"] ?? 1;

                $dolar = $real / $cotacao;
                
                // number_format($real, 2, ",", ".")
                echo "<p>Seus R\$ " .number_format($real, 2 , ",", ".") . " equivalem 
                a <strong>US\$ " . number_format($dolar, 2, ",", ".") . "</strong></p>";
            ?>
        </p>
        <button onclick = "javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>