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
                    $nota1 = $_POST["nota1"];
                    $nota2 = $_POST["nota2"];
                    $nota3 = $_POST["nota3"];
                    $nota4 = $_POST["notaf"];

                    

                    switch ($Escolha) {
                        case 'Biologia':
                            
                            $media = 15;
                            $resul = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

                            if ( $resul >= $media) {

                                echo "Parabéns você foi Aprovado em Biologia: nota $resul";

                            } elseif ($resul < $media) {

                                echo "Você está de recuperação em Biologia: nota = $resul";
                            }
                            break;
                            case 'Filosofia':
                            
                                $media = 20;
                                $media_recuperacao = 15;
                                $resul = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        
                                if ( $resul > $media || $resul <= $media) {
        
                                    echo "Parabéns você foi Aprovado em Filosofia: resul";
        
                                } elseif ($resul < $media || $resul = $media_recuperacao) {
        
                                    echo "Você está de recuperação em : $resul";
                                } 
                                
                                break;
                                case 'Geografia':
                            
                                    $media = 15;
                                    $resul = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
            
                                    if ( $resul >= $media) {
            
                                        echo "Parabéns você foi Aprovado em Geografia";
            
                                    } elseif ($resul < $media) {
            
                                        echo "Você está de recuperação";
                                    }
                                    break;
                                case 'História':
                                    
                                    $media = 25;
                                    $resul = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
            
                                    if ( $resul >= $media) {
            
                                        echo "Parabéns você foi Aprovado em História";
            
                                    } elseif ($resul < $media) {
            
                                        echo "Você está de recuperação";
                                    }
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

