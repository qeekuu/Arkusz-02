<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynajem pokoi</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header>
        <section id="baner">
            <h2>Pensjonat pod dobrym humorem</h2>
        </section>
    </header>
    <main>
        <section id="leftpanel">
            <a href="index.html">GŁÓWNA</a>
            <img src="1.jpg" alt="pokoje">
        </section>
        <section id="centerpanel">
            <a href="cennik.php">CENNIK</a>
            <table>
                <?php
                    $connection = mysqli_connect("localhost","root","","wynajem");

                    $sql = "SELECT * FROM pokoj";
                    $result = mysqli_query($connection,$sql);
                    while ($row = mysqli_fetch_array($result)){
                        echo "<tr>
                                <td>$row[0]</td>
                                <td>$row[1]</td>
                                <td>$row[2]</td>
                            </tr>";
                    }
                    mysqli_close($connection);
                ?>
            </table>
        </section>
        <section id="rightpanel">
            <a href="kalkulator.html">KALKULATOR</a>
            <img src="3.jpg" alt="pokoje">
        </section>
    </main>
    <footer>
        <p>Stronę opracował: 00000000000</p>
    </footer>
</body>
</html>
