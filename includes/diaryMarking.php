<?php
include("forms/formDiary.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Päiväkirjamerkintä</title>
</head>
<body>
<?php
    echo $_SESSION['username'];
?>

<?php
 if(isset($_POST['ResetEx'])){
    session_unset();
    session_destroy();
//Palataan takaisin tälle samalle sivulle jolloin sessio käynnistyy uudelleen
    header("Location: " . $_SERVER['PHP_SELF']);
}
?>
</body>
</html>