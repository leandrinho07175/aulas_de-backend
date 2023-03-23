<?php
    if(isset($_GET['numero1']) && isset($_GET['numero2'])){
        $r = $_GET['numero1'] + $_GET['numero2'];
        echo $r;
        
    }else{
    //echo "voce precisa informar os valores para somar";
    //faz um rediricionamento
    //header("location: form1.html");
}    



?>