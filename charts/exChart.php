
    <script src="https://www.gstatic.com/charts/loader.js%22%3E"></script>
    <script>
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      //luodaan taulukko jossa näkyy merkinnän päivämäärä ja liikunnan kesto
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Päivämäärä', 'Kesto (min)'],

          //Haetaan tiedot tietokannasta
          <?php
              $myConnection= mysqli_connect("$host","$user","$pass","$dbname") or die ("Virhe muodostettaessa yhteyttä tietokantaan. Ota yhteyttä asiakaspalveluun."); 
              $sqlCommand="SELECT Date,Length FROM testi_projekti_paivakirja WHERE userID = '".$_SESSION['userID']."' ORDER BY Date DESC LIMIT 7";
              $query=mysqli_query($myConnection, $sqlCommand) or die(mysqli_error($myConnection));
              while($data=mysqli_fetch_array($query)){
                $Date=$data['Date'];
                $Length=$data['Length'];
          ?>
           ['<?php echo substr($Date,0,10);?>',<?php echo $Length;?>], 
          <?php
              }
          ?> 
        ]);

        var options = {
          title: 'Liikunnan kesto 7:stä edellisestä treenistä.',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        //asetetaan tiedot taulukkoon, päivitetään taulukko
        var chart = new google.visualization.ColumnChart 
(document.getElementById('bar_chart'));

        chart.draw(data, options);
      }
    </script>
    <div id="bar_chart"></div>
 