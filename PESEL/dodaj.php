<?php
    $user= 'root';
    $pass= '';
    $host = 'localhost';
    $base = 'dane'; 
    $con= mysqli_connect($host,$user,$pass, $base);
    mysqli_select_db($con,$base);

    if(isset($_POST['sub']))
		 {
             $Tytul = $_POST['titl'];
             $Gatunek = $_POST['gat'];
             $Rok = $_POST['prod'];
             $Ocena = $_POST['mark'];
             
   $query = "insert into filmy (gatunki_id,tytul,rok,ocena) VALUES ($Gatunek, '$Tytul',$Rok,$Ocena)";

   $run =mysqli_query($con,$query) or die(mysqli_error($con));
   
   echo "Film " . $Tytul . " został dodany do bazy";
   mysqli_close($con);
         }
?>