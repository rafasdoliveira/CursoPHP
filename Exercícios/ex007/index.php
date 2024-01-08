<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas</title>
</head>
<body>
    <h1>Funções Aritméticas</h1>
    <p><strong>ABS</strong></p>
    <p>O valor absoluto é o mesmo número, sem levar em conta o seu sinal, seja ele positivo ou negativo.</p>
    <p>Valor informado: 500</p>
    <p>Retorno: </p>
    <?php 
    $valor = abs(500);
    echo("A resposta é $valor");
    ?>
    <p>Valor informado: -2000</p>
    <p>Retorno: </p>
    <?php 
    $valor = abs(-2000);
    echo("A resposta é $valor");
    ?>
    
    <p><strong>Base Convert</strong></p>
    <p>Realiza conversões de base, exemplo: decimal -> binário.</p>
    <p>Na função, informamos o valor, a base inicial e a base a qual queremos converter</p>
    <p>base_convert(8, 10, 2)</p>
    <p>8 é um valor decimal, em binário ele passa a ser:</p>
    <?php 
        $valor = base_convert(8, 10, 2);
        echo $valor;
    ?>

    <p><strong>intdiv()</strong></p>
    <p>Realiza a divisão inteira</p>
    <p>Exemplo: 5/2</p>
    <?php 
        $real = 5/2;
        echo("A divisão <strong>real</strong> de 5/2 retorna: $real");
    ?>
    <br>
    <?php 
        $inteiro = intdiv(5, 2);
        echo("A divisão <strong>inteira</strong> de 5/2 retorna: $inteiro");
    ?>
    <br>
    <?php 
        $resto = 5%2;
        echo("O <strong>resto</strong> de 5/2 retorna: $resto");
    ?>

    <p><strong>Min(), Max()</strong></p>
    <p>Min retorna o menor valor, por exemplo: min(5, 2)</p>
    <?php 
        $min = min(5 ,2);
        echo("O menor valor é: $min");
    ?>
    <p>Max retorna o maior valor, por exemplo: min(5, 2)</p>
    <?php 
        $max = max(5 ,2);
        echo("O maior valor é: $max");
    ?>

    <p><strong>Ceil(), Floor(), Round()</strong></p>
    <p>Ceil arredonda o valor p/ cima</p>
    <p>Floor arredonda o valor p/ baixo</p>
    <p>Round arredonda o valor aritmético</p>

    <p><strong>Hypot()</strong></p>
    <p>Calcula o valor da Hipotenusa</p>

    <p><strong>pi()</strong></p>
    <p>Retorna o valor de Pi</p>
    <?php 
        $pi = pi();
        echo $pi;
    ?>

    <p><strong>pow()</strong></p>
    <p>Calcula a potência</p>

    <p><strong>sin(), cos(), tan()</strong></p>
    <p>sin() calcula o Seno</p>
    <p>cos() calcula o Coseno</p>
    <p>tan() calcula o Tangente</p>

    <p><strong>sqrt()</strong></p>
    <p>Calcula a raiz quadrada</p>


</body>
</html>