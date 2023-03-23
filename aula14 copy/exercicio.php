<?php
    if(isset($_POST['numero1']) && isset($_POST['numero2'])){
        $r = $_POST['numero1'] + $_POST['numero2'];
        echo $r;
        
    }else{
    //echo "voce precisa informar os valores para somar";
    //faz um rediricionamento
    //header("location: form1.html");
}    



?>