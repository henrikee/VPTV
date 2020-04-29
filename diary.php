<?php
include("includes/navMain.php");
include("includes/header.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
<head>
    <title>Virtual PT - Päiväkirja</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/diary.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Gotu&display=swap" rel="stylesheet">
    <link href="themes/light.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<span id="date"></span>
<header>
    <h1>Päiväkirja</h1>
    <h3>Paina "Tee merkintä" kirjataksesi päivän tiedot</h3>
</header>

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
<div class="charts">
    <?php
        include("includes/diaryOpenHealthInfo.php");
    ?>
    <?php
        include("charts/pulseChart.php");
    ?>
</div>
<script>
    var date = new Date();
    document.getElementById("date").innerHTML = "Tänään on "+date.getDate()+'.'+(date.getMonth()+1)+'.'+date.getFullYear();
</script>
<script src="js/diary.js"></script>
</body>
</html>