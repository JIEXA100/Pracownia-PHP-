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
             
   $query = "select login, haslo FROM tabela_kapshuk WHERE login = '$Login' AND haslo = '$Haslo'";

   $konto = "select admin FROM tabela_kapshuk WHERE login = '$Login' AND haslo = '$Haslo'";
   $run =mysqli_query($con,$query) or die(mysqli_error($con));
   
   
   $result = $con->query($query);
   //$warunek = "select login, haslo FROM uzytkownicy WHERE login = '$Login' AND haslo = '$Haslo'";
   //$res = $con->query($que);
                //if($res->num_rows>0)

   if ($result->num_rows > 0)
        {
            header( 'Location: http://localhost/ok08/logowanie/Connection.php' );
        }
        else 
        {
           echo "Wpisano złe dane.";
        }
       }

   
?>


<form action="" method="post">
Login:<br><input type="text" name="log"><br>
Hasło:<br><input type="password" name="pas"><br>
<input name="sub" type="submit" value="Zaloguj się">
</form>
