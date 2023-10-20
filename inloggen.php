<?php
include_once('database.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../beroeps-project2/css/inloggen.css">
    <link rel="stylesheet" href="../beroeps-project2/css/reset.css">
    <script src="https://kit.fontawesome.com/a46b3f773e.js" crossorigin="anonymous" defer></script>
    <title>Auto website</title>
</head>

<body>
        <div class="navbar">
            <div class="logo">
            <a href="index.php"><img style="width: 140px;" src="../beroeps-project2/images/car-logo.png" alt="logo"></a>
            </div>
            <div class="nav-items">
                <ul>
                <li class="hover"><a href="index.php">Home</a></li>
                    <li class="hover"><a href="autos.php">Catalogus</a></li>
                    <li class="hover"><a href="winkelmandje.php">Winkelmandje</a></li>
                    <li class="hover"><a href="registreren.php">Registreren</a></li>
                    <li class="main-li"><span class="li-main">Inloggen</span></li>
                </ul>
            </div>
        </div>
        <div class="container-bg">
            <h1 style="font-weight: 900;">Inloggen</h1>
            <div class="user-icon">
                <img src="../hotel_ter_duin/images/user-icon.jpg" alt="">
            </div>
            <form action="" method="post">
                <div class="username">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="username" placeholder="Gebruikersnaam" autocomplete="off" required>
                </div>
                <div class="password">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="pass" placeholder="Wachtwoord" autocomplete="off" required>
                </div>
                <div class="no-acc">
                    <a href="registreren.php">Geen account?</a>
                </div>
                <div class="login-btn">
                    <input style="border: none; font-weight:900;" type="submit" name="submit" value="Inloggen">
                </div>
            </form>
            <?php
            if(isset($_POST['submit'])) {
                $gebruikersnaam = $_POST['username'];
                $wachtwoord = $_POST['pass'];

                $query = "SELECT gebruikersnaam, wachtwoord FROM gebruikers WHERE gebruikersnaam = :gebruikersnaam";
                $stmt = $conn->prepare($query);
                $stmt->bindParam(':gebruikersnaam', $gebruikersnaam);
                $stmt->execute();

                if ($stmt->rowCount() > 0) {
                    $row = $stmt->fetch();
                    $opgeslagenGebruikersnaam = $row['gebruikersnaam'];
                    $opgeslagenWachtwoord = $row['wachtwoord'];

                    if (password_verify($wachtwoord, $opgeslagenWachtwoord)) {
                        // header('location:overzicht.php');
                        // exit();
                        echo "<h3 style='text-align:center; margin-top:5rem; font-size:25px'>Gebruikersnaam en wachtwoord zijn correct</h3>";
                    } else {
                        echo "<h3 style='text-align:center; margin-top:5rem; font-size:25px'>Ongeldige combinatie van gebruikersnaam en wachtwoord</h3>";
                    }
                } else {
                    echo "<h3 style='text-align:center; margin-top:5rem; font-size:25px'>Gebruiker niet gevonden</h3>";
                }
            }
            ?>
        </div>
        </main>
        <footer>
            <div class="footer-entire">
                <div class="left box">
                    <div class="footer-title">Contact</div>
                    <div class="mail">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor" fill="white"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                            <polyline points="3 7 12 13 21 7"></polyline>
                        </svg>
                        <a href="mailto:beroepsproject2@talnet.nl"><span class="mail-text">beroepsproject2@talnet.nl</span></a>
                    </div>
                    <div class="phone">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor" fill="white"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                            </path>
                        </svg>
                        <a href="tel:0206538903"><span class="phone-number">020 653 89 03</span></a>
                    </div>
                    <div class="location">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="12" cy="11" r="3"></circle>
                            <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                            </path>
                        </svg>
                        <a href="https://www.google.com/maps/place/MBO+College+Zuidoost+-+ROC+van+Amsterdam/@52.3159227,4.9464103,17z/data=!3m1!4b1!4m5!3m4!1s0x47c60b91697d8729:0xb5cf33c91399403c!8m2!3d52.3159194!4d4.948599"
                            target="_blank">
                            <span class="address">Fraijlemaborg 135, 1102 CV Amsterdam</span>
                        </a>
                    </div>
                </div>
                <div class="left box">
                    <div class="footer-title">Openingstijden</div>
                    <div class="hours">
                            <div>Maandag tot Woensdag: 08:00 - 15:30</div>
                            <div>Donderdag en Vrijdag: 08:00 - 17:00</div>
                            <div>Weekend: Gesloten</div>
                    </div>
                </div>
            </div>
        </footer>
</body>

</html>