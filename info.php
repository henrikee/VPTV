<?php
include("includes/header.php");
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Gotu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/info.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Tietopankki</title>
</head>
<body>
    <nav>
        <?php
        include("includes/navMain.php");
        ?>
    </nav>
    <span id="date"></span>
    <header>
        <h1>Tietopankki</h1>
        <h3>Täältä löydät tietoa liikunnan määrästä, kuormittavuudesta ja terveyshyödyistä. <br><br>
        Klikkaa sivun vasemmalla puolella olevia linkkejä lukeaksesi vinkkejä!</h3>
    </header>
    <div class="section">
        <div id="buttons">
            <button onclick="func0()">Terveysliikunnan määrä ikääntyvälle.</button>
            <button onclick="func1()">Miksi kannattaa liikkua?</button>
            <button onclick="func2()">Ikääntymisen vaikutukset kehoon.</button>
            <button onclick="func3()">Liikuntasuositukset.</button>
            <button onclick="func4()">Mitä on terveysliikunta?</button>
            <button onclick="func5()">Mitä on kuntoa kohottava liikunta?</button>
            <button onclick="func6()">Mistä ja miten aloittaa liikunta?</button>
        </div>
        <div id="info">
            <p id="p0">IKÄÄNTYVÄN TERVEYSLIIKUNNAN SUOSITUKSET<br>
            -   Liiku vähintään 2 tunti 30 minuuttia viikossa niin, että hengästyt vähän TAI 1 tunti 15 minuuttia niin, että hengästyt selvästi.<br>
            -   Harrasta liikuntaa vähintään kolmena päivänä viikossa.<br>
            -   Harjoittaa lisäksi lihaskuntoa ja liikehallintaa kahtena päivänä viikossa.<br>
            Suosituksen voi täyttää esimerkiksi puolen tunnin lähes päivittäisellä kävelyllä. Puoli tuntia voi kerätä vaikka 10 minuutin pätkissä.<br>
            </p>
            <p id="p1">MIKSI KANNATTAA LIIKKUA?<br>Terveysliikunta ja kuntoa kohottava liikunta ovat erityisen tärkeitä ikääntyville, sillä ne hidastavat muutoksia, joista pääset lukemaan otsikon 'Ikääntymisen vaikutukset kehoon' alta. Kehon rappeutumisen hidastumisen lisäksi, liikunta auttaa tunnetusti ehkäisemään aivojen – ja hermoston toimintaan vaikuttavia sairauksia ja tiloja, esim. muistisairauksia ja kärttyisyyttä. Ikääntyessä myös kehon aineenvaihdunta hidastuu, jolloin paino saattaa nousta rasvan kertymisen myötä. Vaikka terve määrä rasvaa kehossa on senioreille tärkeää, sen liiallinen esiintyminen kehossa altistaa sairauksille. Säännöllinen liikunta auttaa painon pysymistä terveellisenä ja sinulle edullisena.</p>
            <p id="p2">IKÄÄNTYMISEN VAIKUTUKSET KEHOON<br>
            Iän lisääntyessä elimistön toiminnot ja solujen uusiutuvuus hidastuvat. Toisin sanoen elimistö heikkenee ja surkastuu nopeammin iän lisääntyessä, jos siitä ei pidä hyvää huolta. Iän tuomat surkastumiset vaikuttavat kehossa seuraavilla tavoilla:<br>
            <br>- Lihasmassaa katoaa.<br>
            - Aerobinen (kestävyys) kunto heikkenee.<br>
            - Tasapaino heikkenee.<br>
            - Liikkuvuus (notkeus) pienenee.<br>
            - Luuston heikkenee.<br><br>
            Lihasmassan katoaminen kiihtyy 50 ikävuodesta ylöspäin. Massan lisäksi voima ja kyky nopeisiin suorituksiin heikkenevät. Samalla aerobinen kestävyys alenee, sillä keuhkojen hapenottokyky surkastuu. Tasapainon heikkenemiseen vaikuttaa lihasmassan kadon lisäksi muutokset hermoston toiminnassa, joka ylläpitää korvassa sijaitsevaa tasapainoelintä. Liikkuvuuden pienenemiseen voivat vaikuttaa esimerkiksi luuston epämuodostumat, lihasten heikkous, jänteien lyhentyminen ja kudoksen kimmoisuuden vähentyminen. <br>Näin lueteltuna muutokset kuulostavat melko kauhistuttavilta, mutta positiivinen uutinen on se, että niihin kaikkiin voi vaikuttaa merkittävästi omalla liikkumisella, ravitsemuksella ja levolla.
            </p>
            <p id="p3">LIIKUNTASUOSITUKSET<br>Senioreiden liikuntasuosituksissa painotetaan alle 60-vuotiaiden suosituksia enemmän lihasvoimaa ja tasapainoa, sillä ne vaikuttavat merkittävästi arjessa selviämiseen, itsenäiseen liikkumiskykyyn ja kaatumisten ehkäisyyn ja niiden haittojen vähentämiseen. Tärkeää on, että liikunta olisi monipuolista ja vaihtelevaa. Näin taataan liikunnan positiiviset vaikutukset kaikkialle kehoon.<br><br>
            Kaikki päivän aikainen liikuskelu (kotiaskareet, tuolilta nousu, portaiden käyttö) on hyödyllistä ja sitä tulisi sisällyttää päivään niin paljon kuin on mahdollista. Itse liikunnasta puhuttaessa suositukset ovat seuraavanlaiset:<br>
            Reipasta liikkumista (terveysliikuntaa) suositellaan vähintään 2 tuntia 30 minuuttia viikossa. Tiedät liikkuvasi reippaasti, jos hengästyt hiukan, mutta pystyt kuitenkin puhumaan liikunnan aikana. Jos liikut raskaasti (kuntoa kohottava), viikottainen aika tulisi olla vähintään 1 tunti ja 15 minuuttia. Raskasta liikuntaa on sellainen, jossa tunnet sykkeesi nousevan huomattavasti ja olet niin hengästynyt, että puhuminen on suorituksen aikana vaikeaa tai mahdotonta.<br>
            Näitä liikuntamuotoja voi myös sekoittaa, niin, että liikut esim. kerran viikossa raskaasti 15 minuuttia ja kolmesti viikossa reippaasti 40 minuuttia.<br>
            Jos olet vasta-alkaja, älä yritä heti päästä näihin lukemiin vaan aloita rauhallisesti ja pyri kohti suositusten mukaisia määriä. Liian raskas aloittaminen aiheuttaa kehoon ikäviä kiputiloja ja altistaa loukkaantumisille.<br><br>
            <img src="img/reco.png" alt="Liikuntasuositukset"><br>
            Kuva 1. Liikuntasuositukset pyramidikaaviossa.
            </p>
            <p id="p4">TERVEYSLIIKUNTA<br>
            Terveysliikunta pitää nimensä mukaisesti yllä terveyttä ja kuntoliikunta kohottaa sen lisäksi kuntoa eri tavoin. Elimistösi tarvitsee vaihtelevia ärsykkeitä, jotta kuntosi kehittyy monipuolisesti. Monipuolinen liikunta on usein myös hauskempaa kuin yhden lajin harrastaminen. Kokeile itseäsi kiinnostavia tapoja liikkua. Näin liikunnasta on helpompi tehdä tapa.<br>
            Terveysliikuntaa ovat kaikki arkisetkin toimet, esimerkiksi:<br>
            -   Kauppamatka kävellen tai pyöräillen<br>
            -   Lumen luonti, siivoaminen<br>
            -   Pihatyöt<br>
            -   Marjastus<br>
            -   Metsästys<br>
            -   Halonhakkuu<br><br>
            Kuntosi ei näissä toimissa vielä välttämättä nouse, mutta ne vaikuttavat suotuisasti terveyteesi.<br><br>
            Terveyskunnon osa-alueita ovat:<br>
            -   Hengitys- ja verenkiertoelimistön kunto (kestävyys)<br>
            -   Sujuva liikkuminen ja tasapaino (liikehallinta)<br>
            -   Lihasvoima<br>
            -   Nivelten liikkuvuus<br>
            -   Luun vahvuus (tuki- ja liikuntaelimistön kunto)<br>
            -   Painonhallinta<br><br>
            </p>
            <p id="p5">KUNTOA KOHOTTAVA LIIKUNTA<br>
            Kuntoliikunta pitää yllä terveyttä ja lisäksi kohottaa kuntoa. Kuntoliikkujakin tekee kevyen lenkin lähes päivittäin, mutta lisäksi rasittaa itseään enemmän 2-3 kertaa viikossa. Jos kuntoliikkuja haluaa parantaa hengitys- ja verenkiertoelimistönsä kuntoa eli aerobista kuntoa, hän voi välillä juosta, kävellä sauvojen kanssa, kävellä vähän kovempaa ja hengästyä. Jos hän haluaa parantaa lihaskuntoaan, hän voi tehdä voimaharjoituksia: käydä kuntosalilla, tehdä kotona vaikkapa vatsa- ja selkäliikkeitä, nostaa painoja, voimistella. Parhaan tuloksen liikkuja saa, kun tekee molempia, sekä hengästyttävää liikuntaa että lihaskuntoliikkeitä. Venyttely liikunnan jälkeen helpottaa palautumista ja liikunnasta johtuvia lihaskipuja. Kova kuntoilija haluaa olla erittäin hyvässä kunnossa ja liikkuu kevyestä hyvin rasittavaan. Hän voi kevyelläkin lenkillä tehdä välillä hyvin hengästyttäviä liikuntaharjoituksia: ottaa ylämäkipyrähdyksiä tai juosta vaikkapa pylväiden välin kovempaa eli tehdä ns. intervalliharjoituksia. Kovankaan kuntoilijan ei tarvitse juosta maratonia kuntoaan nostaakseen, vaan 5-10 kilometrin lenkitkin riittävät. Hän tarvitsee kovan harjoituksen vain noin kerran 2 viikossa.<br>
            </p>
            <p id="p6">LIIKUNNAN ALOITUS JA SEN OTTAMINEN OSAKSI ELÄMÄÄ<br>
            "Hyvin suunniteltu on puoliksi tehty" -sanonta sopii myös liikunnan aloittamiseen. Helpota liikkeelle lähtöä pohtimalla, mitkä liikunnan terveysvaikutuksista ovat sinulle tärkeitä. Saat siitä motivaatiota. Selkeä päätös siitä miten ja milloin aiot liikkua, auttaa toteuttamaan suunnitelmaa. Aloita maltilla, älä yritä haukata liian isoa palaa kerralla. Varasuunnitelmia on myös hyvä laatia ennakkoon esteiden ja erikoistilanteiden varalle.<br><br>
            Hyviä syitä liikkua:<br>
            -   Jaksat arjessa paremmin.<br>
            -   Tunnet olosi onnellisemmaksi.<br>
            -   Rentoutuminen ja unen saanti helpottaa.<br>
            -   Ulkona liikkuessa voit nauttia luonnosta.<br>
            -   Virkistyt.<br>
            -   Verenpaine alenee.<br>
            -   Sydän- ja verisuonisairauksien vaara alenee.<br>
            -   Veren hyvän kolesterolin (HDL-kolesterolin) pitoisuus nousee.<br>
            -   Riski sairastua 2 tyypin (aikuisiän) diabetekseen alenee.<br>
            -   Liikunta hidastaa iän myötä tapahtuvaa luun haurastumista.<br>
            -   Suojaa rinta- ja paksusuolensyövältä.<br>
            -   Paino pysyy kurissa.<br><br>
            Apukeinoja liikkeelle lähtöön:<br>
            - Päätä päivä, jolloin aloitat.<br>
            - Päätä millä liikunnalla aloitat.<br>
            - Aseta alkuun itsellesi realistinen tavoite, jonka pystyt saavuttamaan suhteellisen helposti. Tavoitteen saavuttaminen luo onnistumisen tunteen, jonka jälkeen voit asettaa uuden, haastavamman tavoitteen.<br>
            - Käy esimerkiksi puolen tunnin kävelyllä kolmesti viikossa muutaman viikon ajan.<br>
            - Pohdi ja kirjaa ylös vaikutuksia, joita huomaat.<br><br>
            Joitakin auttaa suunnitelman teko:<br>
            - Merkitse kalenteriin parhaiten sopivat viikonpäivät ja kellonajat harrastaa liikuntaa.<br>
            - Helpottaisiko suunnitelmassa pysymistä seurassa liikkuminen? Kuka tai ketä ne voisivat olla?<br>
            - Jos haluat kokeilla uutta lajia tai liikkua ryhmässä, etsi sinulle sopivaa laji- tai ryhmäliikuntaa lähistöltäsi ja liity rohkeasti mukaan!<br><br>
            Jos aloitat suunnitelmallisuudella, kokeile myöhemmin hellittää siitä ja luoda liikunnasta tapa, joka on osa arkielämääsi. Liikunnan säännöllisestä harrastamisesta tulee loppujen lopuksi helpompaa ja "huomaamattomampaa", mitä vähemmän liikuntatuokiosi vaatii jatkuvaa järjestelyä ja aikatauluttamista.<br><br>
            </p>
        </div>
    </div>
<script src="js/info.js"></script>

</body>
</html>