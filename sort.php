<?php
    /*$owoce = array(" d"=>"mango", " a"=>"papaja"," b"=>"banan"," c"=>"aronia");
    //asort($owoce); sortowanie
    //arsort($owoce); odwrotna kolejność
    //ksort($owoce); sortowanie po kluczach
    // krsort($owoce); odwrotne sortowanie kluczy
    while(list($klucz, $wartosc) = each($owoce)){
        echo("$klucz = $wartosc");
        echo("<br>");
    }*/
    $warzywa = array(" 1"=> "Oleksii Kapshuk", " 2"=> "Tomek Mejer", " 3"=> "Kuba Młodzianowski", 
    " 4"=> "Szymon Paw", " 5"=> "Filip Mech", " 6"=> "Max Raczkowski", 
    " 7"=> "Łukasz Sasin", " 8"=> "Kacper Richert"," 9"=> "Bartek Pochyłuk", " 10"=> "Emil Teleszewski");
    krsort($warzywa);
    while(list($klucz, $wartosc) = each($warzywa)){
        echo("$klucz = $wartosc");
        echo("<br>");
    }
?>
