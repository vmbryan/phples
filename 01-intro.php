<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $name = "Slim Shady";

        // Hi, My name is Slim Shady

        // 3 manieren om te printen
        echo "<h1>Hi, my name is " . $name . "</h1>";
        echo '<h1>Hi, my name is $name</h1>';
        echo "<h1>Hi, my name is $name</h1>"; // wanneer je variabelen wil printen gebruik dan dubbele quotes

    ?>

    <h1>Hi my name is <?php echo $name; ?></h1> 
</body>
</html>