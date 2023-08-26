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
                    $nota4 = $_POST["nota4"];

                    

                    switch ($Escolha) {
                        case 'Biologia':
                            
                            $media = 20;
                            $resul = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

                            if ( $resul >= $media) {

                                echo "Parabéns você foi Aprovado em Biologia: nota $resul";

                            } else {

                                echo "Você está de recuperação em Biologia: nota = $resul";
                            }
                            break;
                            case 'Filosofia':
                            
                                $media = 20;
                                $resul = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        
                                if ( $resul >= $media) {
        
                                    echo "Parabéns você foi Aprovado em Filosofia: $resul";
        
                                } else {
        
                                    echo "Você está de recuperação em Filosofia: $resul";
                                } 
                                
                                break;
                                case 'Geografia':
                            
                                    $media = 20;
                                    $resul = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
            
                                    if ( $resul >= $media) {
            
                                        echo "Parabéns você foi Aprovado em Geografia : $resul";
            
                                    } else {
            
                                        echo "Você está de recuperação em Geografia : $resul";
                                    }
                                    break;
                                case 'História':
                                    
                                    $media = 25;
                                    $resul = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
            
                                    if ( $resul >= $media) {
            
                                        echo "Parabéns você foi Aprovado em História : $resul";
            
                                    } else {
            
                                        echo "Você está de recuperação em História : $resul";
                                    }
                                    break;
                                    case 'Língua Inglesa':
                                    
                                        $media = 30;
                                        $resul = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
                
                                        if ( $resul >= $media) {
                
                                            echo "Parabéns você foi Aprovado em Língua Inglesa: $resul";
                
                                        } else {
                
                                            echo "Você está de recuperação em Língua Inglesa : $resul";
                                        }
                                        break;
                                        case 'Língua Portuguesa':
                                    
                                            $media = 40;
                                            $resul = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
                    
                                            if ( $resul >= $media) {
                    
                                                echo "Parabéns você foi Aprovado em Língua Portuguesa : $resul";
                    
                                            } else {
                    
                                                echo "Você está de recuperação em Língua Portuguesa : $resul";
                                            }
                                            break;   
                                            case 'Matemática':
                                    
                                                $media = 40;
                                                $resul = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
                        
                                                if ( $resul >= $media) {
                        
                                                    echo "Parabéns você foi Aprovado em Matemática : $resul";
                        
                                                } else {
                        
                                                    echo "Você está de recuperação em Matemática : $resul";
                                                }
                                                break;
                                                case 'Química':
                                    
                                                    $media = 35;
                                                    $resul = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
                            
                                                    if ( $resul >= $media) {
                            
                                                        echo "Parabéns você foi Aprovado em Química : $resul";
                            
                                                    } else {
                            
                                                        echo "Você está de recuperação em Química : $resul";
                                                    }
                                                    break;
                                                    case 'Sociologia':
                                    
                                                        $media = 30;
                                                        $resul = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
                                
                                                        if ( $resul >= $media) {
                                
                                                            echo "Parabéns você foi Aprovado em Sociologia : $resul";
                                
                                                        } else {
                                
                                                            echo "Você está de recuperação em Sociologia : $resul";
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



