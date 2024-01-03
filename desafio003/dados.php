<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Dólar - Versão 1</title>
</head>
<body>
    <header>
        <h1>Conversor de Dólar - V1</h1>
    </header>
    <main>
        <?php 
            $real = $_GET["inReal"] ?? "Informe o valor que deseja converter";
            $dolarFixo = 4.93;
            $conversao = $real * $dolarFixo;
            echo("Seus <strong>R$ $real</strong> são equivalentes a <strong>U$ $conversao</strong></br>");
            echo("<br><em>Cotação fixa realizada 03/01/2024</em>")
        ?>
        <br>
        <a href="index.html">Cotar novamente</a>
      
    </main>
</body>
</html>