<?php

/* Com algumas funções que eu aprendi na escola, tentei desenvolver um código
    Junto com um amigo, que criptografa um texto em Cifra de César. Ainda não
    Consegue descriptografar, mas planejo implementar isso no código */

$pulo = readline("Digite quantas casas quer pular: ");

$frase = readline("Digite a frase a ser mudada: ");

$alfab = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];

$alfab_maiusculo = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];

$split = str_split($frase);

$frase_final = "";

foreach ($split as $letra) {

$c = 0;

    $letra_maiuscula = mb_strtoupper($letra);

    if($letra == $letra_maiuscula) {
    
        while ($c <= 25) {

            $soma = $c + $pulo;
    
            if($letra == " ") {
            
                $frase_final .= " ";
    
                break;
            
            } elseif ($soma > 25) {
                
                $volta = $soma - 26;
                
                $frase_final .= str_replace($letra, ($alfab_maiusculo[$volta]), $letra);
    
                break;
            
            } elseif ($letra == ($alfab[$c])) {
                
                $frase_final .= str_replace($letra, ($alfab_maiusculo[$c + $pulo]), $letra);
    
                break;
    
            }
    
            $c += 1;
    
        }
    
    } else {
    
        while ($c <= 25) {

            $soma = $c + $pulo;
    
            if($letra == " ") {
            
                $frase_final .= " ";
    
                break;
            
            } elseif($soma > 25) {
                
                $volta = $soma - 26;
                
                $frase_final .= str_replace($letra, ($alfab[$volta]), $letra);
    
                break;
            
            } elseif ($letra == ($alfab[$c])) {
                
                $frase_final .= str_replace($letra, ($alfab[$c + $pulo]), $letra);
    
                break;
    
            }
    
            $c += 1;
            
        }

    }

}

echo $frase_final;

