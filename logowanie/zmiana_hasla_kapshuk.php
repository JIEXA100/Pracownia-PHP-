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
             $Nowe = $_POST['new'];
             $Nowe2 = $_POST['new2'];
   $query = "select login, haslo from tabela_kapshuk WHERE login='$Login' AND haslo='$Haslo'";
   $run =mysqli_query($con,$query) or die(mysqli_error());

   if (mysqli_num_rows(mysqli_query("select login, haslo FROM uzytkownicy WHERE login = '$Login' AND haslo = '$Haslo';")) > 0)
        {
            $x = "$Nowe";
            $wym = '/[A-Z]/';
            $wym2 = '/[!@#$%^&*()_-]/';
            if(preg_match($wym, $x, $matches, PREG_OFFSET_CAPTURE) && preg_match($wym2, $x, $matches, PREG_OFFSET_CAPTURE))
            {
               if($Nowe == $Nowe2)
               {
                   $query2 = "Update tabela_kapshuk set haslo = '$Nowe' where login = '$Login'";
                   $run =mysqli_query($con,$query2) or die(mysqli_error());
               }
               else
               {
                  echo "Hasła nie są takie same";
               }
           }
           else
           {
              echo "Hasło nie spełnia wymagań złożoności";
            }
           }
        else 
        {
           echo "Wpisano złe dane";
        }
       }

   
?>


<form action="" method="post">
Login: <input type='text' name='log'><br>
Stare hasło: <input type='password' name='pas'><br>
Nowe hasło: <input type='password' name='new' ><br>
Potwierdź hasło: <input type='password' name='new2'><br>
<input type='submit' value='Zmień hasło' name='sub'>
</form>
