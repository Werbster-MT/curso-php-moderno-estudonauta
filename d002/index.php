<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 002 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
            <?php 
                $min = 0;
                $max = 100;
                echo "<p>Gerando um número aleatório entre 0 e 100...<br>
                        O valor gerado foi <strong>" . mt_rand($min, $max) . "</strong>
                    </p>";
            ?>
        <button onclick="javascript:window.location.reload()">&#x1F503; Gerar outro</button>
    </main>
</body>
</html>