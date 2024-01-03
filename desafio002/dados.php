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
        <h1>Número Gerado:</h1>
    </header>    
    <main>
        <?php 
            $n1 = $_GET["n1"] ?? "Você precisa informar um número";
            $n2 = $_GET["n2"] ?? "Você precisa informar um número";
            echo "O número gerado foi: " . rand($n1, $n2);
        ?>
    </main>
</body>
</html>