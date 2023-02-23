<style>
div{
    border: 1px solid #000;
}
    .container{
        display: grid;
        grid-template-rows: auto auto;
        grid-template-columns: auto auto auto auto auto;
    }
    </style>
<h2>Estrutura de repeticâo for</h2>
<p>
    Utilizada para repetir uma sequência instruçoes um número predeterninado de vezes.
</p>

<p>
    <pre>
        for(inicio; passo){
            //instruções a serem repetidas
        }
    </pre>
</p>

<div class="container">
<?php
for($tabuada = 1; $tabuada <= 10; $tabuada++){
    echo"<div>";
    for($contador = 0; $contador <= 10; $contador++){
        $resultado = $tabuada * $contador;
        echo "$tabuada x $contador = $resultado <br>";
    }
    echo "</div>";
}
 ?>
 </div>