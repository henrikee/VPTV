<?php
include("includes/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/diary.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Gotu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Virtual PT - Päiväkirja</title>
</head>
<body>
    <nav>
        <?php
        include("includes/navMain.php");
        ?>
    </nav>
<span id="date"></span>
<header>
    <h1>Päiväkirja</h1>
    <h3>Paina "Tee merkintä" kirjataksesi päivän tiedot<br>Paina "Täytä terveystietolomake" tallentaaksesi uudet terveystiedot</h3>
</header>
<div class="buttons_forms">
    <button class="btn" id="diaryBtn">Tee merkintä</button>
    <div class="markingPopup">
        <div class="markingContent">
            <?php
            include("includes/diaryMarking.php");
            ?>
        </div>
    </div>
    
    <button class="btn" id="healthFormBtn">Täytä terveystietolomake</button>
    <div class="markingPopup2">
        <div class="markingContent2">
            <?php
            include("includes/diaryHealthInfo.php");
            ?>
        </div>
    </div>
</div>
<div class="charts">
    <div class="pulseChart_pulseInfo">
        <?php
            include("charts/pulseChart.php");
        ?>
        <p class="pulseInfo">Palautumissykkeesi kertoo sinulle nimensä mukaisesti, kuinka hyvin palaudut treenistä. Palautumissyke miinustetaan maksimisykkeestä, johon sinulla on mahdollisuus yltää. Mitä suurempi erotus on, sitä nopeammin palautuminen alkaa. Suurempi erotus kuvastaa parempaa kuntoa ja sitä, ettei keho ole ylikuormittunut liiasta treenaamisesta tai muista elämän vilskeistä. Keskimääräinen laskukaava maksimisykkeelle on 220 - ikä.
        </p>
    </div>
    <div class="exChart">
        <?php
            include("charts/exChart.php");
        ?>
        <p class="exInfo">Edelliset 7 treeniä minuutteina.</p>
    </div>
    <?php
        include("includes/diaryOpenHealthInfo.php");
    ?>
</div>

<script>
    var date = new Date();
    document.getElementById("date").innerHTML = "Tänään on "+date.getDate()+'.'+(date.getMonth()+1)+'.'+date.getFullYear();
</script>
<script src="js/diary.js"></script>
</body>
</html>