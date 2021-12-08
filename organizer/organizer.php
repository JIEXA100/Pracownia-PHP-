<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Organizer</title>
        <link rel="stylesheet" href="styl6.css"/>
    </head>
    <body>
        <header>
            <div class="baner1">
                <h2>MÓJ ORGANIZER</h2>
            </div>
            <div class="baner2">
                <?php
                    $user= 'root';
                    $pass= '';
                    $host = 'localhost';
                    $base = 'egzamin6';
                    $con= mysqli_connect($host,$user,$pass, $base);
                    mysqli_select_db($con,$base);

                    if(isset($_POST['sub'])) 
                    {   
                        $wydarzenie = $_POST['wydarzenie'];
                        $query = "update zadania set wpis = '$wydarzenie' where dataZadania = '2020-08-27'";
                        $run =mysqli_query($con,$query) or die(mysqli_error($con));
                        mysqli_close($con);
                    }
                ?>
                <form action="organizer.php" method="POST">
                Wpis wydarzenia:
                <input type="text" name="wydarzenie" id="wydarzenieID">
                <input type="submit" name="sub" value="ZAPISZ">
                </form>
            </div>
            <div class="baner3">
                <img src="logo2.png" alt="Mój organizer" style="width:100px;height:100px">
            </div>
        </header>
        <div class="glowny">
            <?php
                $user= 'root';
                $pass= '';
                $host = 'localhost';
                $base = 'egzamin6';
                $con= mysqli_connect($host,$user,$pass, $base);
                mysqli_select_db($con,$base);
        
                $query1 = "select dataZadania, miesiac, wpis from zadania where miesiac = 'sierpien'";
                $result = $con->query($query1);
                while($row = $result->fetch_assoc()) 
                {
                    $data = $row['dataZadania'];
                    $miesiac = $row['miesiac'];
                    $wpis = $row['wpis'];
                    echo '<div>';
                    echo "<h6>$data, $miesiac</h6>";
                    echo "<p>$wpis</p>";
                    echo '</div>';
                }
            ?>
        </div>
        <footer>
            <?php
                $user= 'root';
                $pass= '';
                $host = 'localhost';
                $base = 'egzamin6';
                $con= mysqli_connect($host,$user,$pass, $base);
                mysqli_select_db($con,$base);

                $query2 = "select miesiac, rok from zadania where dataZadania = '2020-08-01'";
                $result = $con->query($query2);
                $row = $result->fetch_assoc();
                $miesiac = $row['miesiac'];
                $rok = $row['rok'];
                echo "<h1>miesiąc: $miesiac, rok: $rok</h1>";
                mysqli_close($con);
            ?>
            <p>Stronę wykonał: Oleksii Kapshuk</p>
        </footer>
    </body>
</html>