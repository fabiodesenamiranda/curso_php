<?php

    $lista = ["arroz", "trigo", "sal", "tomate"];

    function listaParaString($arr) {
        
        $str = "Você comprou estes itens: ";

        for($i =0; $i < count ($arr); $i++ ){
            if($i + 1 == count($arr)) {
                $str .= "$arr[$i]. ";
            } else {
                $str .= "$arr[$i], ";
            }
        }

        return $str;
    }

    echo listaParaString($lista); 