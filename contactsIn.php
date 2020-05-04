<?php
include("includes/header.php");
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contactsIn.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Gotu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Virtual PT - Yhteystiedot</title>
</head>
<body>
    <nav>
        <?php
        include("includes/navMain.php");
        ?>
    </nav>
    <span id="date"></span>
    <header>
        <h1>Yhteystiedot</h1>
    </header>
    <main>
        <section>
            <h2>Omistajat</h2>
            <div class="persons">
            <div class="boxPerson">
                    <h3>Tuomas Turunen</h3>
                    <p>Product Owner<br>Tuomas, tai tuttavallisemmin Tumppi, on tiimimme idearikas koodivelho. Hän vastasi sovelluksen luonnissa pääasiassa sivuston ominaisuuksien toimivuudesta. Vapaa-ajalla Tumpin voi löytää keittiöstä culinarisoimasta, uima-altaasta polskuttelemasta tai kantamassa tiimiään League of Legends -pelissä.<br><br>Puh. +358 44 528 8389<br>E-mail: tuomatur@metropolia.fi</p>
                    <img src="img/tumppi.jpg" alt="tumppii">
                </div>
                <div class="boxPerson">
                    <h3>Heini Näppä</h3>
                    <p>Scrum Master<br>Heini, toisinaan Hese, on tiimin ilopilleri sekä naisvahvistus. Heinin kädenjälki näkyy pääasiassa sovelluksen fronttipuolella eikä työskennellessä ideoille näy loppua. Vapaa-ajalla Hesen löytää tavallisimmin lenkkipolulta, mummolasta tai pleikkarin äärestä.<br><br>Puh. +358 50 911 1593<br>E-mail: heinina@metropolia.fi</p>
                    <img src="img/heini.jpg" alt="heinii">
                </div>
                <div class="boxPerson">
                    <h3>Henrik el-Khouri</h3>
                    <p>Code Master<br>Henkka, virallisesti Henrik, omistaa tiimin rautaisimmat hermot sekä vankan työotteen, työn tauottaminen tuottaa parhaita tuloksia. Henkka on sovelluksen tietokantojen isä ja vastaa niiden toimivuudesta. Vapaa-ajalla Henkan löytää yleensä treenaamasta painisalilta, ruokalevolta tai dominoimasta Owerwatchissa.<br><br>Puh. +358 40 557 1241<br>E-mail: henrikee@metropolia.fi</p>
                    <img src="img/henkka.jpeg" alt="henkkaa">
                </div>
</div>
        </section>
        <h2>Valmentajat</h2>
        <section>
            <div class="persons">
                <div class="boxPerson">
                    <h3>Fysioterapeutti</h3>
                    <p>Onko sinulla liikkumista rajoittavia vammoja/tiloja tai oletko toipumassa leikkauksesta?<br>Varaa aika fysioterapeutin konsultaatioon sekä 4 viikon henkilökohtaisen liikuntasuunnitelman tekoon!<br>Soita fysioterapeutin numeroon arkisin klo 8-18 tai lähetä sähköpostia ja fysioterpauttimme vastaa sinulle pikimmiten.<br>Puh. +358 12 345 6789<br>E-mail: fysioterapia@virtualpt.fi</p>
                </div>
                <div class="boxPerson">
                    <h3>Liikunnanohjaaja</h3>
                    <p>Haluatko yksilöllistä ohjausta liikuntaan ja kehityksen seurantaan?<br>Varaa aika liikunnanohjaajan konsultaatioon sekä 4 viikon henkilökohtaisen treeniohjelman tekoon!<br>Soita liikunnanohjaajan numeroon arkisin klo 8-18 tai lähetä sähköpostia ja liikunnanohjaajamme vastaa sinulle pikimmiten.<br>Puh. +358 98 765 4321<br>E-mail: liikunta@virtualpt.fi</p>
                </div>
                <div class="boxPerson">
                    <h3>Ravitsemusterapeutti</h3>
                    <p>Syötkö sinulle sopivalla tavalla? Kärsitkö mahdollisesti 2 tyypin diabeteksesta ja haluaisit helpottaa sitä ruokavalion avulla?<br>Terveellinen ravitsemus on yksi isoimmista asioista, joka tukee pidempää tervettä ikää, eikä kaikille sovi samanlainen ruokavalio.<br>Varaa aika ravitsemusterapeutin konsultaatioon sekä 4 viikon henkilökohtaisen ravitsemussuunnitelman tekoon!<br>Soita ravitsemusterapeutin numeroon arkisin klo 8-18 tai lähetä sähköpostia ja ravitsemusterapeuttimme vastaa sinulle pikimmiten.<br>Puh. +358 32 132 1321<br>E-mail: ravitsemus@virtualpt.fi
                    </p>
                </div>
            </div>
        </section>
        <h2>Asiakaspalvelu</h2>
        <section>
            <div class="persons">
                <div class="boxPerson">
                    <h3>Asiakaspalvelu</h3>
                    <p>Onko sinulla kysyttävää? Lähetä meille sähköpostia! Asiakaspalvelumme vastaa mielellään sinua askarruttaviin kysymyksiin.<br>asiakaspalvelu@virtualpt.fi</p>
                </div>
            </div>
        </section>
    </main>
<script>
    var date = new Date();
    //getting and displaying current date on page
    document.getElementById("date").innerHTML = "Tänään on "+date.getDate()+'.'+(date.getMonth()+1)+'.'+date.getFullYear();
</script>

</body>
</html>