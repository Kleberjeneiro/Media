<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style-calculo.css">
        <title>Aplicativo Média</title>

        <style>

            .php {
                text-align: center;
            }

            .echo {
                text-align: center;
            }

        </style>
    </head>
    

    <body>

        <fieldset>

            <legend>Resultado</legend>

            <div class="container">
            
                
                <?php

                    $nota_prova = $_POST["nota_prova"];
                    $media_prova = (float)75;

                    if ($nota_prova >= $media_prova) {
                        
                        echo "Parabéns - Aprovado. <br> ";
                    } else {
                        
                        echo "Que Pena - Reprovado. <br> ";
                    }
                ?>
                <br> 

            <a href="index.html">Voltar</a>
        </div>

        </fieldset>
        
    </body>

</html>

