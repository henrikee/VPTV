
<html>
  <head>
    <script type="text/javascript" 
 src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Päivämäärä', 'Syke'],
          
          //PHP KOODI
          <?php
              $myConnection= mysqli_connect("$host","$user","$pass","$dbname") or die ("Virhe muodostettaessa yhteyttä tietokantaan. Ota yhteyttä asiakaspalveluun."); 
<<<<<<< Updated upstream
              $sqlCommand="SELECT Date,Length,Pulse FROM testi_projekti_paivakirja WHERE userID = '".$_SESSION['userID']."'";
=======
              $sqlCommand="SELECT Date,Pulse FROM testi_projekti_paivakirja WHERE userID = '".$_SESSION['userID']."' ORDER BY Date DESC LIMIT 7";
>>>>>>> Stashed changes
              $query=mysqli_query($myConnection, $sqlCommand) or die(mysqli_error($myConnection));
              while($data=mysqli_fetch_array($query)){
                $Date=$data['Date'];
                $Pulse=$data['Pulse'];
          ?>  
<<<<<<< Updated upstream
           ['<?php echo $Date;?>',<?php echo $Pulse;?>,<?php echo $Length;?>], 
=======
           ['<?php echo substr($Date,0,10);?>',<?php echo $Pulse;?>], 
>>>>>>> Stashed changes
          <?php      
              }
          ?> 
        ]);

        var options = {
          title: 'Palautumissykkeen vaihtelu 7 edellisestä treenistä.',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart 
        (document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 40vw; height: 35vh"></div>
  </body>
</html>
