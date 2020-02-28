<?php

// $salt = "SDKJFEK231482348!!#;;"; // salt hier toegevoegd om nog eens na te kijken via md5;

//   if(isset( $_COOKIE["loggedin"])){
//     $cookieValue = $_COOKIE["loggedin"]; // yes?
//     $frags = explode(",", $cookieValue); // explode is splits  op vanaf ',' en steek deze fragmenten in een array

//       if(md5($frags[0].$salt) != $frag[1]){ // als deel 1 van frags, wich is email niet gelijk is aan 
//         //no
//         header("Location: login.php");
//       }

//     /*if($cookieValue != "yes"){
//       header("Location: login.php");
//     }*/
//   }
//   // else{
//   //   header("Location: login.php");
//   // }

session_start();
if(isset($_SESSION["user"])){
  //ok
}else{
  header("Location: login.php");
}


include_once("data.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IMDFlix</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
  <div id="netflix">
  <?php include_once("nav.inc.php"); ?>
  
  <div class="collection">
  <?php foreach($collection as $key => $item):?>
    <a href="details.php?id=<?php echo $key; ?>" class="collection__item" style="background-image: url(<?php echo $item['poster'];?>)"></a>
  <?php endforeach; ?>
  </div>
  
</div>

</body>
</html>