<?php
    function velocidadeMaxima($vel) {

        if(is_int($vel)){
            
            echo "O carro atinge a velocidade maxima de $vel km/h <br>";
        } else {
            echo "Por favor passe um numero inteiro <br>";
        }

    }

    velocidadeMaxima(200);
    velocidadeMaxima(220);
    velocidadeMaxima(300);

    echo "Teste continuando <br>";

    $velocidade = 125;

    velocidadeMaxima($velocidade);


    velocidadeMaxima(250, "teste");
    
    
    velocidadeMaxima("teste");

    function descreverAnimal($nome, $raca) {

        echo "O $nome é da $raca";
    }

    descreverAnimal("Bob", "vira-lata <br>");
    descreverAnimal("Shark", "Pastor Alemao <br>");


    
