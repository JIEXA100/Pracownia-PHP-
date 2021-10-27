<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Komis Samochodowy</title>
        <link rel="stylesheet" href="auto.css">
    </head>
    <body>
        <header>
            <h2>SAMOCHODY</h2>
        </header>
        <div class="lewy">
            <h2>Wykaz samochodów</h2>
                <ul>
                <?php
                   $user= 'root';
                   $pass= '';
                   $host = 'localhost';
                   $base = 'komis';   
                   $con= mysqli_connect($host,$user,$pass, $base);
                   mysqli_select_db($con,$base); 

                   $zapytanie1 = "select id,marka,model from samochody";
                   $wynik = mysqli_query($con,$zapytanie1);
                   $ile = mysqli_num_rows($wynik);

                   for ($i=0; $i < $ile; $i++)
                   {
                       $wiersz = $wynik->fetch_assoc();
                       echo '<li>'.$wiersz['id'].' '.$wiersz['marka'].' '.$wiersz['model'].'</li>';
                   }
                ?>
                </ul>
            <h2>Zamówienia</h2>
            <ul>
            <?php
                   $user= 'root';
                   $pass= '';
                   $host = 'localhost';
                   $base = 'komis';   
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
            </ul>
        </div>
        <div class="prawy">
            <h2>Pełne dane: Fiat</h2>
            <?php
                   $user= 'root';
                   $pass= '';
                   $host = 'localhost';
                   $base = 'komis';   
                   $con= mysqli_connect($host,$user,$pass, $base);
                   mysqli_select_db($con,$base); 

                   $zapytanie3 = "select * from samochody where marka = 'Fiat'";
                   $wynik = mysqli_query($con,$zapytanie3);
                   $ile = mysqli_num_rows($wynik);

                   for ($i=0; $i < $ile; $i++)
                   {
                       $wiersz = mysqli_fetch_array($wynik);
                       echo $wiersz['id'].' / '.$wiersz['marka'].' / '.$wiersz['model']
                       .' / '.$wiersz['rocznik'].' / '.$wiersz['kolor'].' / '.$wiersz['stan'].'<br>';
                   }
                ?>
        </div>
        <footer>
            <table class="tabela">
                <tr>
                    <td>
                    <a href="kwerendy.txt">Kwerendy</a>  
                    </td>
                    <td>
                        Autor: 00000000000
                    </td>
                    <td>
                        <img src="auto.png" alt="komis samochodowy">
                    </td>
                </tr>
            </table>
        </footer> 
    </body>
</html>