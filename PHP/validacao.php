<?php
    $usu = filter_input(INPUT_POST, "usuario");
    $sen = filter_input(INPUT_POST, "senha");

    echo ("$usu - $sen");
   //comando de comparação
   //if (Se); else if (Senão Se); else (Senão)

   /*  e - &&
       ou - ||

       <; >; <=; >=; == (Igual); != (diferente)*/

    if ($usu == "João" && $sen == "123"){
        header("location: ../HTML/novapagina.html");
        exit;
    }else {
        ?>
        <!DOCTYPE html>
        <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Error</title>
                <script src="../JS/script.js"></script>
            </head>
            <body>
                <script>
                    errorRedirect();
                </script>
            </body>
        </html>
        <?php
    }
?>
