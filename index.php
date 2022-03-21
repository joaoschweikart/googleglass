<?php
    $nome = 'guilherme';
    echo 'O meu nome é '.$nome;
    echo '<hr>';
    if ($nome == 'joao'){
        echo 'Você é o joão!';
    }else{
        echo 'Você não é o joão!';
    }
    echo '<hr>';
    for ($i=0; $i <= 10; $i++){
        echo $i;
        echo '<hr>';
    }
    $i=0;
    while ($i <= 10) {
        echo $i;
        echo '<hr>';
        $i++;
    }
    function mostraNumero($n) {
        echo $n;
    }
    mostraNumero(4)
?>
