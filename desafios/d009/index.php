<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 009 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Área de declarações
        $v1 = $_GET["v1"] ?? 0;
        $p1 = $_GET["p1"] ?? 1;
        
        $v2 = $_GET["v2"] ?? 0;
        $p2 = $_GET["p2"] ?? 1;
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1º Valor</label>
            <input type="number" name="v1" value="<?=$v1?>" required>
            
            <label for="p1">1º Peso</label>
            <input type="number" name="p1" min="1" value="<?=$p1?>" required>

            <label for="v2">2º Valor</label>
            <input type="number" name="v2" value="<?=$v2?>" required>

            <label for="p2">2º Peso</label>
            <input type="number" name="p2" min="1" value="<?=$p2?>" required>

            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <?php 
            $ma = ($v1 + $v2) / 2;
            $mp = ($v1 * $p1 + $v2 * $p2) / ($p1 + $p2);
        ?>
 
        <h2>Resultado Final</h2>
        <p>Analisando os valores <?=$v1?> e <?=$v2?>:</p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre valores é igual a <?=number_format($ma, 2, ",", ".")?>.</li>
            <li>A <strong>Média Aritmética Ponderada</strong> entre valores é igual a <?=number_format($mp, 2, ",", ".")?>.</li>
        </ul>
    </section>
</body>
</html>