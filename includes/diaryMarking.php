<?php
include("forms/formDiary.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PÃ¤ivÃ¤kirjamerkintÃ¤</title>
</head>
<body>
<?php
    echo $_SESSION['username'];
?>

    
<?php
 //Tallennetaanko terveystiedot
if(isset($_POST['submitEx'])){
   try {
      
        $data420['userID']=$_SESSION['userID'];
        $data420['Ex']=$_POST['givenEx'];
        $data420['Length']=$_POST['givenLength'];
        $data420['Pulse']=$_POST['givenPulse'];
        $data420['Meal']=$_POST['givenMeal'];
        $data420['Sleep']=$_POST['givenSleep'];
        $data420['SleepLength']=$_POST['givenSleepLength'];
    //sql injektio
     $sql420="INSERT INTO testi_projekti_paivakirja (userID, Ex, Length, Pulse, Meal, Sleep, SleepLength) VALUES (:userID, :Ex, :Length, :Pulse, :Meal, :Sleep, :SleepLength);";
     $kysely420 = $DBH->prepare($sql420); 
     $kysely420->execute($data420);
   } catch(PDOException $e) {
    file_put_contents('log/DBErrors.txt', 'index.php: '.$e->getMessage()."\n", FILE_APPEND);
   }
  }
?>
</body>
</html>