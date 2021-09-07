<?php
$n= $_GET['war'];
$i=1;
for($i=0;$i<=$n;$i++){
    $los = rand(1,1000);
    echo ($los);
    echo ("<br>");
}



?>
<form action="" meethod="GET">
    <input type="text" name="war">
    <input type="submit" name="show">

</form>