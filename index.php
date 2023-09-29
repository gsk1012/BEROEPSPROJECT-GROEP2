<?php
include_once('database.php');

$query = $conn->prepare("SELECT * FROM autos");
$query->execute();
$media = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../beroeps-project2/css/reset.css">
    <link rel="stylesheet" href="../beroeps-project2/css/hamza-nav-footer.css">
    <link rel="stylesheet" href="../beroeps-project2/css/marouane-main.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <label class="logo">DesignX</label>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">contact</a></li>
            <li><a href="">services</a></li>
            <li><a href="">feedback</a></li>
        </ul>
    </nav>
    <div class="foto-container">
        <div class="div-1">
            <div class="foto">
                <img src="../beroeps-project2/images/corolla.jpg" alt="Foto 1">
                <div class="foto-text">Merk : Audi <br>  Model : 2020 <br> Prijs : 100.000$ <br> kilometerstand:233000km</div>
                <button style="background-color:red; padding:7px; cursor:pointer">Meer informatie</button>
            </div>
            <div class="foto">
                <img src="../beroeps-project2/images/ford.jpg" alt="Foto 2">
                <div class="foto-text">Merk : Audi <br>  Model : 2020 <br> Prijs : 100.000$ <br> kilometerstand:233000km</div>
                <button style="background-color:red; padding:7px; cursor:pointer">Meer informatie</button>
            </div>
            <div class="foto">
                <img src="../beroeps-project2/images/bmw.jpg" alt="Foto 3">
                <div class="foto-text">Merk : Audi <br>  Model : 2020 <br> Prijs : 100.000$ <br> kilometerstand:233000km</div>
                <button style="background-color:red; padding:7px; cursor:pointer">Meer informatie</button>
            </div>

            <div class="foto">
                <img src="../beroeps-project2/images/volkswagen.jpg" alt="Foto 4">
                <div class="foto-text">Merk : Audi <br>  Model : 2020 <br> Prijs : 100.000$ <br> kilometerstand:233000km</div>
                <button style="background-color:red; padding:7px; cursor:pointer">Meer informatie</button>
            </div>
        </div>
        <div class="div-2">
            <div class="foto">
            <img src="../beroeps-project2/images/mercedes.jpg" alt="Foto 5">
                <div class="foto-text">Merk : Audi <br>  Model : 2020 <br> Prijs : 100.000$ <br> kilometerstand:233000km</div>
                <button style="background-color:red; padding:7px; cursor:pointer">Meer informatie</button>
            </div>
            <div class="foto">
                <img src="../beroeps-project2/images/audi.jpg" alt="Foto 6">
                <div class="foto-text">Merk : Audi <br>  Model : 2020 <br> Prijs : 100.000$ <br> kilometerstand:233000km</div>
                <button style="background-color:red; padding:7px; cursor:pointer">Meer informatie</button>
            </div>

            <div class="foto">
            <img src="../beroeps-project2/images/volvo.jpg" alt="Foto 7">
                <div class="foto-text">Merk : Audi <br>  Model : 2020 <br> Prijs : 100.000$ <br> kilometerstand:233000km</div>
                <button style="background-color:red; padding:7px; cursor:pointer">Meer informatie</button>
            </div>
            <div class="foto">
                <img src="../beroeps-project2/images/nissan.jpg" alt="Foto 8">
                <div class="foto-text">Merk : Audi <br>  Model : 2020 <br> Prijs : 100.000$ <br> kilometerstand:233000km</div>
                <button style="background-color:red; padding:7px; cursor:pointer">Meer informatie</button>
            </div>
        </div>
    </div>
    </div>
    <footer>
        <h1>Lorem ipsum dolor sit.</h1>
    </footer>
</body>
</html>