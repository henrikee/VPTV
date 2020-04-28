<?php
include("includes/navLogin.php");
include("includes/boxLogin.php");
include("includes/header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/login.css">
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Gotu&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <title>VIRTUAL PT - Kirjautuminen</title>
</head>

<body>
  <!-- Lab 6 ja 3 koodit, tietenkin muokattu jotta toimii uusilla parametreilla -->
  <!-- Lab 6 and 3 codes modified in a way that it works with new parameters -->
  <?php
  //Onko submittia painettu
  //Is submit pressed
  if (isset($_POST['submitUser'])) {
    //***Tarkistetaan email myös palvelimella
    //***Checking if email adress is in the server
    
    if (!filter_var($_POST['givenEmail'], FILTER_VALIDATE_EMAIL)) {
      $_SESSION['swarningInput'] = "Illegal email";
    } else {
      unset($_SESSION['swarningInput']);
      try {
        //Tiedot kannasta
        //Information from the server
        
        $data['email'] = $_POST['givenEmail'];
        $STH = $DBH->prepare("SELECT userName, userEmail, userPwd FROM testi_projekti WHERE userEmail = :email;");
        $STH->execute($data);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $tulosOlio = $STH->fetch();
        //lomakkeelle annettu salasana + krypti
        //Given password+crypt
        $givenPasswordAdded = $_POST['givenPassword'] . $added; //$added löytyy config.php

        //Löytyikö email kannasta? 
        //Is the email in server  
        if ($tulosOlio != NULL) {
          //email löytyi
          //email found
          if (password_verify($givenPasswordAdded, $tulosOlio->userPwd)) {
            $_SESSION['sloggedIn'] = "yes";
            $_SESSION['suserName'] = $tulosOlio->userName;
            $_SESSION['suserEmail'] = $tulosOlio->userEmail;
            
           //kirjautuneen käyttäjän userID?
              $data1['email'] = $_SESSION['suserEmail'];
              $sql1 = "SELECT userID FROM testi_projekti where userEmail =  :email";
              $kysely1=$DBH->prepare($sql1);
              $kysely1->execute($data1);
              $tulos1=$kysely1->fetch();
              $currentUserID=$tulos1[0];
              $_SESSION['userID']=$currentUserID;
    
            //Palataan pääsivulle kirjautuneena
            //Return to the main site
            header("Location: Main.php"); 
          } else {
            $_SESSION['swarningInput'] = "Salasana on väärin, yritä uudelleen.";
          }
        } else {
          $_SESSION['swarningInput'] = "Sähköposti väärin, tarkista  ";
        }
      } catch (PDOException $e) {
        file_put_contents('log/DBErrors.txt', 'createAccount.php: ' . $e->getMessage() . "\n", FILE_APPEND);
        $_SESSION['swarningInput'] = 'Database problem';
      }
    }
  }
  ?>

  <?php
  //***Luovutetaanko ja palataan takaisin pääsivulle alkutilanteeseen
  //***Do we give up and return to back to the mainpage
  //ilman  rekisteröintiä? Wirhout registeration?
  if (isset($_POST['submitBack'])) {
    session_unset();
    session_destroy();
    header("Location: signup.php");
  }
  ?>

  <?php
  //***Näytetäänkö lomakesyötteen aiheuttama varoitus?
  //***Do we show warning for invalid input?
  
  if (isset($_SESSION['swarningInput'])) {
    echo "<script>alert('". $_SESSION['swarningInput']."');</script>";
    $_SESSION['swarningInput'] = NULL;
    }
  
  ?>

</body>

</html>