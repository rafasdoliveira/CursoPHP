<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício PHP</title>
</head>
<body>
    <?php 
        $v1 = $_GET["v1"] ?? 0;
        $v2 = $_GET["v2"] ?? 0;
    ?>
    <main>
        <h1>Somador</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" step="0.01" value="<?=$v1?>">
            <label for="v1">Valor 2</label>
            <input type="number" name="v2" id="v2" step="0.01" value="<?=$v2?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php 
            $soma = $v1 + $v2;
            echo "O resultado da soma entre os valores $v1 e $v2 <strong>resulta em $soma</strong>"
        ?>
    </section>
</body>
</html>