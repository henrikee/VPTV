
    <?php
        echo $_SESSION['username'];
    ?>
    <?php


$sql="SELECT gender, age, height, weight, bmi, bmiWarning, waistCircuit, waistCircuitWarning, systolic, diastolic, bloodPressureWarning FROM testi_projekti_terveystiedot WHERE userID = '".$_SESSION['userID']."'ORDER BY Date DESC LIMIT 1";
$kysely=$DBH->prepare($sql);                
$kysely->execute();
while ($row=$kysely->fetch()){   

    echo("<br><table class='hdata'><tr>
            <th class='HDth'>Sukupuoli</th>
            <td class='HDtd'>".$row["gender"]."</td></tr>
            <tr>
            <th class='HDth'>Ikä</th>
            <td class='HDtd'>".$row["age"]."</td>
            </tr>
            <tr>
            <th class='HDth'>Pituus</th>
            <td class='HDtd'>".$row["height"]."</td>
            </tr>
            <tr>
            <th class='HDth'>Paino</th>
            <td class='HDtd'>".$row["weight"]."</td>
            </tr>
            <tr>
            <th class='HDth'>Painoindeksi</th>
            <td class='HDtd'>".$row["bmi"]."</td>
            </tr>
            <tr>
            <th class='HDth'>Painoarvio</th>
            <td class='HDtd'>".$row["bmiWarning"]."</td>
            </tr>
            <tr><th class='HDth'>Vyötärönympärys</th>
            <td class='HDtd'>".$row["waistCircuit"]."</td>
            </tr>
            <tr>
            <th class='HDth'>Vyötärönympärys arvio</th>
            <td class='HDtd'>".$row["waistCircuitWarning"]."</td>
            </tr>
            <tr>
            <th class='HDth'>Verenpaineen yläpaine</th>
            <td class='HDtd'>".$row["systolic"]."</td>
            </tr>
            <tr>
            <th class='HDth'>Verenpaine alapaine</th>
            <td class='HDtd'>".$row["diastolic"]."</td>
            </tr>
            <tr>
            <th class='HDth'>Verenpaine arvio</th>
            <td class='HDtd'>".$row["bloodPressureWarning"]."</td>");
           echo("</tr>"."</table>");
        }
?>