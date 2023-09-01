<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style-calculo.css">
        <title>Resultado</title>

    </head>



    <body>

        
        <fieldset>
          
            <legend>Resultado</legend>

            <div class="container">
                <h1></h1>

                <?php
                    
                    $Escolha = $_POST["Escolha"];

                    function somaResultado() {

                        $Escolha = $_POST["Escolha"];
                        $nota1 = $_POST["nota1"];
                        $nota2 = $_POST["nota2"];
                        $nota3 = $_POST["nota3"];
                        $nota4 = $_POST["nota4"];
                        $media = $_POST["media"];
                        $resul = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

                        if ( $resul >= $media) {

                            echo "Parabéns você foi Aprovado $Escolha: nota $resul";

                        } elseif ($resul < $media) {

                            echo "Você está de recuperação $Escolha: nota = $resul";
                        }
                    } 

                    switch ($Escolha) {
                        case "Biologia":
                            
                            somaResultado();
                        break;
                        case 'Filosofia':
                            
                            somaResultado(); 
                        break;
                        case 'Geografia':
                            
                            somaResultado(); 
                        break;
                        case 'História':
                                    
                            somaResultado(); 
                        break;
                        case 'Língua Inglesa':
                                    
                            somaResultado(); 
                        break;
                        case 'Língua Portuguesa':
                                    
                            somaResultado(); 
                         break;   
                        case 'Matemática':
                                    
                            somaResultado(); 
                        break;
                        case 'Química':
                                    
                            somaResultado(); 
                        break;
                        case 'Sociologia':
                                    
                            somaResultado(); 
                        break;                 
                        default:
                            # code...
                        break;
                    }

                ?><br><br>
                <br>

                <a href="Prova.html">Clique aqui caso tenha ficado de recuperação</a>
                
            
            </div>
        </fieldset>     
       
    </body>

</html>

