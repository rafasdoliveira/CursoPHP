<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Raízes</title>
</head>
<body>
    <?php 
        $numero = $_GET["numero"] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <p>Descubra a raiz quadrada e a raiz cúbica</p>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número:</label>
            <input type="number" name="numero" id="numero">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $quadrada = sqrt($numero);
            echo "A raiz quadrada de $numero é $quadrada<br>";

            $cubica = pow($numero, 1/3);
            echo "A raiz cubica de $numero é $cubica";
        ?>
    </section>
</body>
</html>