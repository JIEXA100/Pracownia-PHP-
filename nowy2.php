<form action="" method="POST">
    Wprowadź liczbę: <input type="text" name="liczba">
    <input type="submit" name="show">
</form>
<?php

if(isset($_POST['show'])){
    $n = $_POST['liczba'];
    function silnia($n)
    {
        if($n==1){
            return 1;
        }
        else{
            return $n * silnia($n-1);
        }
    }

    echo(silnia($n));
}
?>
