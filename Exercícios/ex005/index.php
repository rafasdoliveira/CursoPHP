<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulção de Strings</title>
</head>
<body>
    <h1>Manipulção de Strings</h1>
    <!-- Aspas Duplas -->
    <p><strong>Double Quoted - Aspas Duplas</strong></p>
    <?php 
        echo "PHP\u{1F418}"
    ?>
    <p>Atribuindo variável: $nome = "Rafael"</p>
    <?php 
        $nome = "Rafael";
        echo "Olá, $nome // "; 
        echo ' Olá, $nome';
    ?>
    <p>Utilizando aspas duplas, ocorre a interpretação da String</p>
    <!-- Aspas Simples -->
    <p><strong>Single Quoted - Aspas Simples</strong></p>
    <?php 
        echo 'PHP\u{1F418}'
    ?>
    <p>Utilizando aspas simples, não ocorre a interpretação</p>
    <!-- Sintaxe Heredoc -->
    <p><strong>Heredoc</strong></p>
    <?php 
    $curso = "PHP";
    $ano = date('Y');
    echo <<< TESTE
        Estou estudando $curso em $ano!\n
            Meu nome é Rafael Oliveira \u{26A1}
    TESTE;

    ?>
    <p>O heredoc permite você trabalhar com blocos de textos maiores sem se preocupar em escapar aspas duplas ou simples.</p>
</body>
</html>