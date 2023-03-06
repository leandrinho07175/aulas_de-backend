<?php

     $meuVetor = [];
        $meuVetor[] = "Murilo";
        $meuVetor[] = 4;
        $meuVetor[] = 3;

        //ou
        $meuVetor = ["Murilo", 4, 3];

        //calcular média
        $media = ($meuVetor[1]  + $meuVetor[2])/2;
        $meuVetor[] = $media; //coloca a média na última posição
                              //livre do vetor

        if($meuVetor[3] >= 6){
           $meuVetor[4] = "aprovado";
        }else{
            $meuVetor[] = "reprovado";
        }        
        var_dump($meuVetor);
    
    ?>