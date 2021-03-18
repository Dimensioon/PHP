
<?php

    //  Ordenar três valores do menor para o maior (IF, elseif, else)

    // OBS: o que está escrito em baixo (o rand) eu peguei na internet, so estou usando para melhorar a questão e a resposta!.

    // OBS (2): o resto eu que fiz sozinho.

    $ale1 = rand (0,10);
    $ale2 = rand (0,10);
    $ale3 = rand (0,10);   

    echo ("Numero aleatório 01: $ale1 " .  PHP_EOL . "Numero aleatório 02: $ale2" . PHP_EOL ."Numero aleatório 03: $ale3" . PHP_EOL);

    if($ale1 >= $ale2 and $ale1 >= $ale3){
        $nmaior = $ale1;
        if($ale2 >= $ale3){
            $nmeio = $ale2;
            $nmenor = $ale3;
        }else{
            $nmeio = $ale3;
            $nmenor = $ale2;
        }
    }
    else if ($ale2 >= $ale1 and $ale2 >= $ale3){
        $nmaior = $ale2;
        if($ale1 >= $ale3){
            $nmeio = $ale1;
            $nmenor = $ale3;
        }else{
            $nmeio = $ale3;
            $nmenor = $ale1;
        }
    }
    else if($ale3 >= $ale1 and $ale3 >= $ale2){
        $nmaior = $ale3;
        if($ale2 >= $ale1){
            $nmeio = $ale2;
            $nmenor = $ale1;
        }else{
            $nmeio = $ale1;
            $nmenor = $ale2;
        } 
    }      

    echo ("O menor numero: $nmenor, o numero do meio: $nmeio e o maior numero: $nmaior");
    
?>