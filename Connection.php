<?php
   $user= 'root';
   $pass= '';
   $host = 'localhost';
   $base = 'uczniowie';    //tutaj nazwa twojej bazy
   $con= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($con,$base);
  
    if(isset($_GET['sub']))
		 {
             $Id = $_GET['num'];
             $Imie = $_GET['imie'];
             $Nazwisko = $_GET['nazw'];
             $Hobby = $_GET['hobby'];
$query = "Insert into 4g(Id, Imie, Nazwisko, Hobby) values('$Id', '$Imie', '$Nazwisko', '$Hobby')";
$run =mysqli_query($con,$query) or die(mysqli_error());



if($run){
    echo "Formularz zatwierdzony";
}
else{
    echo "formularz jest błędny";
}
         }

         if(isset($_GET['del']))
		 {
             $Id = $_GET['idnt'];
$query1 = "delete from 4g where Id = $Id";
$run =mysqli_query($con,$query1) or die(mysqli_error());
         }

if(isset($_GET['sort']))
		 {
$query2 = "select * from 4g order by Imie";
$run =mysqli_query($con,$query2) or die(mysqli_error());
         }



function lacz_bd()
{  
  $db = new mysqli('127.0.0.1', 'root', '', 'uczniowie');  
    if (! $db)
      return false;
   $db->autocommit(TRUE);
   return $db;
}


$db = lacz_bd();
$zapytanie = "select * from 4g";
$wynik = $db->query($zapytanie);
$ile_znalezionych = $wynik->num_rows;

echo '<table>';
echo '<tr><td bgcolor=\"F5DEB3\">Id</td><td bgcolor=\"F5DEB3\">Imie</td>
<td bgcolor=\"F5DEB3\">Nazwisko</td><td bgcolor=\"F5DEB3\">Hobby</td></tr>';
for ($i=0; $i <$ile_znalezionych; $i++)
        {
                $wiersz = $wynik->fetch_assoc();
                echo '<tr>';
                echo '<td bgcolor=\"AFEEEE\">'.$wiersz['Id'].'</strong></td>';
                echo '<td bgcolor=\"6495ED\">'.$wiersz['Imie'].'</td>';
                echo '<td bgcolor=\"6495ED\">'.$wiersz['Nazwisko'].'</td>';
                echo '<td bgcolor=\"6495ED\">'.$wiersz['Hobby'].'</td>';
                echo '</tr>';
        }
echo '</table>';

?>


<form action="" method="get">
Identyfikator:<input type="text" name="num"><br>
Imie:<input type="text" name="imie"><br>
Nazwisko:<input type="text" name="nazw"><br>
Hobby:<input type="text" name="hobby"><br>
<input name="sub" type="submit" value="ok">
</form>

<form action="" method="get">
USUWANIE DANYCH: <br>
Podaj Identyfikator:<input type="text" name="idnt"><br>
<input name="del" type="submit" value="usun">
</form>

<form action="" method="get">
<input name="sort" type="submit" value="sortuj">
</form>