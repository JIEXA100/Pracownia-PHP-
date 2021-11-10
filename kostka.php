<?php
if(isset($_GET['show']))
{
    $n = $_GET['war'];
    $x = $_GET['sciany'];
    $gracz = $_GET['users'];
    
    $fp = fopen("plik.txt", "a");
    

    for($ii = 1;$ii <= $gracz; $ii++)
    {
        $tabl;
        for($i=0;$i<=$n;$i++)
        {
            $los = rand(1,$x);
            //echo ($los);
            //echo ("<br>");
            $table[$i] = $los;
        }
        $noweDane = "Gracz " . $ii . " ma " . array_sum($table) . " punktów
";
        fputs($fp, $noweDane);
    }

    fclose($fp);
}

if(isset($_GET['sub2'])){
    $slowo=$_GET['cezary'];
    $move=$_GET['przes'];
    for($i=0; $i<=strlen($slowo); $i++){
        $a=substr($slowo, $i, 1);
        $b=ord($a);
        $c=$b+$move;
        if($b>65 && $c>90 && $c<96){
            $c-=26;
        }
        else if($b>97 && $c>122){
            $c-=26;
        }
        else if($b==32){
            $c=32;
        }
        echo chr($c);

    }
}
?>
<form action="" method="get">
    Podaj ile chcesz wylosować kostek: <input type="text" name="war"><br>
    Podaj ile ma być ścianek na kostce: <input type="number" name="sciany"><br>
    Podaj ilość graczy: <input type="number" name="users"><br>
    <input type="submit" name="show" value="Losuj">
</form>

<form action="" method="get">
słowo do zaszyfrowania: <input type="text" name="cezary" value=""><br>
liczba przesunięć: <input type="text" name="przes" value=""><br>
<input name="sub2" type="submit" value="ok"><br>
</form>