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
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "teste";
            $sobrenome = $_GET["sobrenome"] ?? "teste";
            echo "<p>Seja bem-vindo, <strong>$nome $sobrenome</strong> !</p>";
            // var_dump($_GET);
        ?>
        <p><a href="index.html">Voltar para página anterior</a></p>
    </main>
</body>
</html>