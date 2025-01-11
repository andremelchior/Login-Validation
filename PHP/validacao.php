<?php
    $usu = filter_input(INPUT_POST, "usuario");
    $sen = filter_input(INPUT_POST, "senha");

    echo ("$usu - $sen");
   //comando de comparação
   //if (Se); else if (Senão Se); else (Senão)

   /* e - &&
       ou - //

       <; >; <=; >=; == (Igual); != (diferente)*/

       if ($usu == "João" && $sen == "123"){
           header("location: ../HTML/novapagina.html");
       }else {
           ?>
           <script>
               window.alert("Dados Incorretos. Tente novamente");
               window.location="../index.html";
            </script>
            <?php
       }
?>
