<?php
//Lisätään navigaatio sekä https+konfigurointi tiedostoon
//including navigation and https+configuration to the file
include("includes/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewpo" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Gotu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <!-- Valmis ikoni (w3 school) -->
    <!-- Ready to use icon (w3 school) -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Virtual PT - Etusivu</title>
</head>
<body>
    <span id="date"></span>
    <nav>
        <?php
        include("includes/navMain.php");
        ?>
    </nav>
    <header>
        <h1>Mukava nähdä sinua <?php echo($_SESSION['suserName']);?>
        !</h1>
    </header>
    <section>
        <div class="card">
            <h3>Päiväkirja aktiivisuuden seurantaan.</h3>
            <p>Päiväkirjaan voit kirjoittaa ja tallentaa tietoja päivästäsi sekä terveystiedoistasi.</p>
            <a class="button" href="diary.php">Näe lisää...</a></div>
        <div class="card">
            <h3>Ideoita liikkumiseen ja harjoitteluun.</h3>
            <p>Etkö tiedä miten kannattaisi liikkua tai aloittaa liikunta? Liikunta sivulta löydät ohjelmia, miten voisit liikkua viikkotasolla ja ideoita, miten voit esimerksi kehittää tasapainoasi.</p>
            <a class="button" href="exersice.php">Näe lisää...</a>
        </div>
        <div class="card">
            <h3>Aktiivinen seniori on terve seniori, mutta miksi?</h3>
            <p>Tietopankkista löydät artikkeleita, joihin on koottu tietoa mm. liikuntasuosituksista ja liikunnan hyödyistä.</p>
            <a class="button" href="info.php">Näe lisää...</a>
        </div>
    </section>
<footer>
    <?php
        include("log/footer.php");
    ?>
</footer>
<script>
    var date = new Date();
    //getting and displaying current date on page
    document.getElementById("date").innerHTML = "Tänään on "+date.getDate()+'.'+(date.getMonth()+1)+'.'+date.getFullYear();
</script>

</body>
</html>