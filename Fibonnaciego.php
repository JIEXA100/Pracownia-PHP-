<form action="" method="POST">
    Wprowadź liczbę: <input type="text" name="liczba">
    <input type="submit" name="show">
</form>
<?php

if(isset($_POST['show'])){
    $n = $_POST['liczba'];
    function fibb($n)
    {
        if($n<3){
            return 1;
        }
        else{
            return fibb($n-2)+fibb($n-1);
        }
    }

    echo($n . " wyraz ciągu Fibbonaciego to: " . fibb($n));
}
?>
