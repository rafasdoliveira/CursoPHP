<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Análise de Número Real</title>
</head>
<body>
    <header>
        <h1>Análise de Número Real</h1>
    </header>
    <main>
        <?php 
            $num = $_GET["inNum"] ?? "Informe um número";
            $int = (int)$num;
            $dec = fmod($num, 1);
            echo "A parte inteira de <strong>$num</strong> é <strong>$int</strong><br>";
            echo "<br>A parte fracionária de <strong>$num<strong> é <strong>$dec<strong>";
        ?>
    </main>
</body>
</html>