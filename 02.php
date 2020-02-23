<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /*
    =====================
    Methode 1
    =====================

    $name = "Slim Shady";
    if(empty($name)){
        echo "name is empty";
    }
    else{
        echo "welcome";
    }

    */
    $name = "Slim Shady";
    if(isset($name)){ 
        echo "name is empty"; //isset — Determine if a variable is declared! and is different than NULL
    }
    else{
        echo "welcome";
    }

    ?>
</body>
</html>