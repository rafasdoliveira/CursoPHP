<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>
<body>
    <h1>Variáveis e Constantes</h1>
     <!-- VARIÁVEIS -->
     <p>
        Utilizando variável: $variavel = "variavel";
        </br>
        Os valores variáveis <strong>podem</strong> ser alterados 
    </p>
    <p>
        <?php 
            $nome= "Rafael";
            echo "Meu nome é " . $nome;
        ?>
    </p>
    <!-- CONSTANTES -->
    <p>
        Utilizando constantes: const country = "Brasil";
        </br>
        Os valores constantes <strong>não</strong> podem ser alterados  
    </p>
    <p>
        <?php 
            const country = "Brasil";
            echo "Meu país é o " . country;
        ?>
    </p>
</body>
</html>