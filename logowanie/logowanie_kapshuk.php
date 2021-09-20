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
   $entry = "select * from tabela_kapshuk WHERE login='$Login' AND haslo='$Haslo'";
   //$run =mysqli_query($con,$query) or die(mysqli_error());

   if (mysql_num_rows(mysql_query("SELECT login, haslo FROM uzytkownicy WHERE login = '".$login."' AND haslo = '".md5($haslo)."';")) > 0)
        {
            
        }
        else echo "Wpisano złe dane.";
       }

   
?>


<form action="" method="post">
Login:<br><input type="text" name="log"><br>
Hasło:<br><input type="password" name="pas"><br>
<input name="sub" type="submit" value="Zaloguj się">
</form>
