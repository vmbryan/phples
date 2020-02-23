<?php 
        $post = [
            "displayName" => "Crushin' it",
            "username"    => "@crushinit",
            "video"       => "https://bit.ly/tiktokker",
            "description" => "The last one really went",
            "comments"    => [
                [
                    "username" => "GoodBytes",
                    "text"     => "OMG",

                ],
                [
                    "username" => "Brok",
                    "text"     => "SIC",

                ],
                [
                    "username" => "Bo",
                    "text"     => "LIT",

                ]

            ]
        ];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        article{
            display: flex;
            font-family: Helvetica;

        }
    </style>
</head>
<body>
    <article>
        <div>
            <video controls autoplay muted src="<?php echo $post["video"]; ?>"></video>
        </div>
        <div>
            <h2><?php echo $post['displayName']; ?></h2>
            <h3><a href="#"><?php echo $post['username']; ?></a></h3>

            <p><?php echo $post['description']; ?></p>

            <div class="comments">
                <?php foreach ($post['comments'] as $comment) { ?>
                
                
                <p>
                    <strong><?php echo $comment['username']; ?></strong>
                    <span><?php echo $comment['text']; ?></span>
                </p>

                <?php } ?>

            </div>
        </div>
    </article>

</body>
</html>