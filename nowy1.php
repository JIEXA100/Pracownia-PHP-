<form action="" method="POST">
    login: <input type="text" name="log"><br>
    haslo: <input type="password" name="pass"><br>
    Wprowadź imie: <input type="text" name="imie"><br>
    Wprowadź nazwisko: <input type="text" name="nazwisko"><br>
    Podaj wiek: <input type="text" name="wiek"><br>
    Podaj miasto: <input type="text" name="miasto">
    <input type="submit" name="show">
</form>
<?php
if(isset($_POST['show'])){
$log = $_POST['log'];
$pass = $_POST['pass'];
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$wiek = $_POST['wiek'];
$miasto = $_POST['miasto'];
if($log=="jacek" && $pass=="owca")
{
    echo("Zalogowałeś się");
    echo("<br>");
    echo("Twoje dane to:");
    echo("<br>");
    echo("Imie - " . $imie);
    echo("<br>");
    echo("Nazwisko - " . $nazwisko);
    echo("<br>");
    echo("Miasto - " . $miasto);
    echo("<br>");
    echo("Wiek - " . $wiek);
    echo("<br>");
}
else
{
    echo ("NIE!");
}


}
?>
