<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="styl2.css">
        <title>Klub wędkowania</title>
    </head>
    <body>
        <header>
            <h2>Wędkuj z nami!</h2>
        </header>
        <div class="lewy">
            <img src="ryba2.jpg" alt="Szczupak" width="500">
        </div>
        <div class="prawy">
            <h3>Ryby spokojnego żeru (białe)</h3>
            <?php
                $user= 'root';
                $pass= '';
                $host = 'localhost';
                $base = 'wedkowanie';    
                $con= mysqli_connect($host,$user,$pass, $base);
                mysqli_select_db($con,$base);

                $zapytanie2 = "select Samochody_id,Klient from zamowienia";
                $wynik = mysqli_query($con,$zapytanie2);
                $ile = mysqli_num_rows($wynik);

                for ($i=0; $i < $ile; $i++)
                   {
                       $wiersz = $wynik->fetch_assoc();
                       echo '<li>'.$wiersz['Samochody_id'].' '.$wiersz['Klient'].'</li>';
                   }
            ?>
            <OL>
                <li><a target="_blank" href="https://wedkuje.pl/">Odwiedź także</a></li>
                <li><a target="_top" href="http://www.pzw.org.pl/">Polski Związek Wędkarski</a></li>
            </OL>
        </div>
        <footer>
            <p>Stronę wykonał: 00000000000</p>
        </footer>
    </body>
</html>