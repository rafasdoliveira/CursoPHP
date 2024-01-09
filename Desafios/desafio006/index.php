<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Anatomia de uma divisão</title>
</head>
<body>
    <?php 
        $dividendo = $_GET["dividendo"] ?? 0;
        $divisor = $_GET["divisor"] ?? 0;

    ?>
    <header>
        <h1>
            Anatomia de uma Divisão
        </h1>
    </header>
    <main>
        <p>
            Informe os números para verificar a anatomia de uma divisão
        </p>  
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label>Dividendo:</label>
            <input type="number" name="dividendo" id="dividendo" value=<?="$dividendo"?>>
            <label>Divisor:</label>
            <input type="number" name="divisor" id="divisor" value=<?="$divisor"?>>
            <input type="submit" value="Verificar">
        </form>  
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
        $resultado = $dividendo / $divisor;
        $resto = $dividendo % $divisor;
        echo "Dividendo: $dividendo<br>";
        echo "<br>Divisor: $divisor<br>";
        echo "<br>Resto: $resto$dividendo / $divisor;<br>";
        echo "<br>Resultado: $divisor<br>";

            // if (condition) {
            //     # code...
            // }
        ?>
    </section>
</body>
</html>