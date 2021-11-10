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
?>
<form action="" method="get">
    Podaj ile chcesz wylosować kostek: <input type="text" name="war"><br>
    Podaj ile ma być ścianek na kostce: <input type="number" name="sciany"><br>
    Podaj ilość graczy: <input type="number" name="users"><br>
    <input type="submit" name="show" value="Losuj">
</form>