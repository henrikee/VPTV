<html>
  <head>
    <script type="text/javascript" 
 src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date', 'Pulse', 'Length'],
          
          //PHP KOODI
          <?php
              $myConnection= mysqli_connect("$host","$user","$pass","$dbname") or die ("Tietokantaan ei voitu luoda yhteyttä"); 
              $sqlCommand="SELECT Date,Length,Pulse FROM testi_projekti_paivakirja WHERE userID = '".$_SESSION['userID']."'";
              $query=mysqli_query($myConnection, $sqlCommand) or die(mysqli_error($myConnection));
              while($data=mysqli_fetch_array($query)){
                $Date=$data['Date'];
                $Pulse=$data['Pulse'];
                $Length=$data['Length'];
          ?>  
           ['<?php echo substr($Date,0,10);?>',<?php echo $Pulse;?>,<?php echo $Length;?>], 
          <?php      
              }

          ?> 
 
        ]);

        var options = {
          title: 'Pulssi tiedot',
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
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>
