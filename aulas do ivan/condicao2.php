<h2>Estrutura de condicao</h2>
<hr>
<p>
    A estrutura de comdicao e utilizada
    para avaliar qual instrucao deve ser 
    executada, dada uma condicao.

    Se a condicao for verdadeira (true) executada a 
    instrução 1, caso contrario executa a instrucao

    <strong>exemplo</strong>
    <pre>
       if (<em>condicao</em)> ){
        //instruão 1
       }else{
        //instrução 2
       }
       <pre>
    </p>
    <?php
    /*para passar de ano é necessario tirar no minimo 6 pontos em cada disciplina ... Ele foi aprovado ou não ?
    */
    $nota_do_murilo = 10;
    $faltas = 0;

    //          V           v
    if($nota_do_murilo >= 6 && $faltas < 75){
        echo "murilo foi aprovado!";
    }else{
        echo "murilo foi reprovado!";
    }
    ?>
    <strong>Exemplo 2</strong>
    > O aluno para ser aprovado precisa obter
    nota superior a 6 pontos, para fazer o exame final
    precisa ter tirado menos que 6 e mais que 3 pontos.
    notas menores que 3 são reprovacoes diretos 
    <?php
     $nota = 6;
     if($nota >=6){
    echo "aprovado";
     }else if ($nota >3){
        echo "faz exame final";
     }else {
        echo "reprovado";
     } 
     ?