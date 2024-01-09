<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Salário</title>
</head>
<body>
    <?php 
        $valorUsuario = $_GET["salario"] ?? 0;
        $salario = 1412;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <label for="salario">Salário (R$):</label>
            <input type="number" name="salario" id="salario" step="0.001" value="<?=$valorUsuario?>">
            <p>Considerando o salário de: R$ 1.412,00</p>
            <input type="submit" value="Calcular">
        </form>
    </main>
        <section id="resultado">
            <h2>Resultado</h2>
            <?php 
                $qtdSalarios = intdiv($valorUsuario, $salario) ;
                $resto = $valorUsuario % $salario;

                $valorUsuario < $salario    ? 
                print "Seu salário está " . number_format($salario-$valorUsuario,2,',','') . " abaixo do salário mínimo" : 
                print "Quem recebe $valorUsuario, ganha $qtdSalarios salários mínmos +" .  number_format($resto,2,',','');

                // Sem utilizar operador ternário
                // if ($valorUsuario < $salario) {
                //     print "Seu salário está " . number_format($salario - $valorUsuario, 2, ',', '') . " abaixo do salário mínimo";
                // } else {
                //     print "Quem recebe $valorUsuario, ganha $qtdSalarios salários mínmos + " . number_format($resto, 2, ',', '');
                // }
            ?>
        </section>
</body>
</html>