<?php
    $url = "https://gist.githubusercontent.com/sampsyo/1241307/raw/208ab2e4b5b576ebc51d801b039f93ee2bbc33ea/genres.txt";

    $genres = file($url);
    shuffle($genres);
    $topten = array_slice($genres,0,10);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        article{
            border: 1px solid black;
            pandding: 0.5em;
            text-align: center;

        }
    </style>
</head>
<body>
    <?php foreach($topten as $genre):?>
        <article>
            <h2><?php echo $genre; ?></h2>
        </article>
    <?php endforeach; ?>
</body>
</html>