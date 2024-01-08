<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
            $num = $_GET["inNumero"] ?? "Informe um valor";
            $ant = $num - 1;
            $suc = $num + 1;
            echo("O número escolhido foi <strong>$num</strong>\n O <em>antecessor</em> é $ant\n O <em>sucessor</em> é $suc");           
        ?>
    </main>
</body>
</html>