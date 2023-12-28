<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos PHP</title>
</head>
<body>
    <h1>Tipos Primitivos PHP</h1>
    <h2>Escalares</h2>
    <ul>
        <li>"String"</li>
        <?php
            $string = "Rafael"; 
            var_dump($string);
        ?>
        <li>Números Inteiros - Int ou Integer</li>
        <?php 
            $num = 300;
            var_dump($num);
            echo $num . " é um valor inteiro";
        ?>
        <li>Números Decimais - Float ou Double</li>
        <?php 
            $num = 30.2;
            var_dump($num);
            echo $num . " é um valor double";
        ?>
        <li>Boolean - True ou False</li>
        <?php 
            $v = true;
            var_dump($v);    
        ?>
    </ul>

    <h2>Compostos</h2>
    <ul>
        <li>Array</li>
        <?php 
            $vet = [6, 2, 9, 3, 5];
            var_dump($vet)
        ?>
        <li>Object</li>
        <?php
            class Pessoa {
                    private $nome;

                public function setNome($nome) {
                $this->nome = $nome;
                }

                public function getNome() {
                return $this->nome;
                }
            }
            
            $p = new Pessoa;
            $p->setNome("Rafael") . " ";
            echo $p->getNome() . " ";
            var_dump($p); 
        ?>
    </ul>
    
    
    
    
</body>
</html>