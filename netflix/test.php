<?php
    var_dump($_POST);

    if(!empty($_POST)){
        // er is iets verzonden //
        $username = $_POST["username"];
        if(!empty($username)){
            echo "it's ok";
        }else{
            echo "not ok";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sign up</h1>
    <form action="" method="post">
    <!-- get is url post is achterliggend  -->
        <label for="username">Username</label>
        <input type="text" id="username" name="username"> 
        <!-- id is frontend name = backend -->
        <input type="submit" value="Sign me up">
    </form>
    
</body>
</html>