<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
        //0x = hexadecimal 0b = binario 0 = octal
        //$num = 010;
        //echo "O valor da variável é $num";

        // $v = "Gustavo";
        // var_dump($v);

        // $num = (int)  3e2; // 3*10^2 coerção
        // echo "O valor é $num";
        // var_dump($num);

        // $num = (float) "950";
        // var_dump($num);

        // $casado = true;
        // var_dump($casado);
        // print("O valor para casado é $casado");

        // $vet = [6, 2.5, 9, 3, "Maria", false];
        // echo "O vetor é$vet";
        // var_dump($vet);
        // print_r($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);

    ?>
</body>
</html>
