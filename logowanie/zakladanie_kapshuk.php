<?php
   $user= 'root';
   $pass= '';
   $host = 'localhost';
   $base = 'logowanie_kapshuk';    //tutaj nazwa twojej bazy
   $con= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($con,$base);
  
    if(isset($_POST['sub']))
		 {
             $Login = $_POST['log'];
             $Haslo = $_POST['pas'];
             $Imie = $_POST['imie'];
             $Nazwisko = $_POST['nazw'];
             $Szkola = $_POST['school'];
             $Adres = $_POST['adr'];
             $Tele = $_POST['tel'];

             if (mysql_num_rows(mysql_query("select login FROM tabela_kapshuk where login = '$Login';")) == 0)
        {
            $query = "Insert into tabela_kapshuk(login, haslo, imie, nazwisko, szkola, adres, telefon) 
            values('$Login', '$Haslo', '$Imie', '$Nazwisko', '$Szkola', '$Adres', '$Tele')";
            $run =mysqli_query($con,$query) or die(mysqli_error());

            echo "Konto zostało utworzone!";
        }
        else echo "Podany login jest już zajęty.";
    
       }

   
?>


<form action="" method="post">
Login:<input type="text" name="log"><br>
Hasło:<input type="password" name="pas"><br>
Imię:<input type="text" name="imie"><br>
Nazwisko:<input type="text" name="nazw"><br>
Szkoła:<input type="text" name="school"><br>
Adres:<input type="text" name="adr"><br>
Telefon:<input type="text" name="tel"><br>
<input name="sub" type="submit" value="Zarejestruj się">
</form>
<form action="logowanie_kapshuk.php" method="post">
    <input name="next" type="submit" value="Przejdź do logowania">
</form>

