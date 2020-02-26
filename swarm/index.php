<?php
/* $checkins = [
    [
        "avatar"      => [
            
        ],
        "username"   => [
            "Jesse", "Michael", "Peter", "Jaroslav", "Matey"
        ],
        "location"   => [
            "San Francisco, CA",
            "Prague, Czech Republic",
            "Goldshire, USA",
            "Retie, Belgium"
        ],
        "text"       => [
            "Le work",
            "It's great here",
            "",
            "Beautiful Weather",
            "Beach time"
        ]
    ]
]; */

$posts = [
    "checkin" => [
        [
            "avatar"   => "",
            "username" => "Jesse",
            "location" => "San Francisco, CA",
            "place"    => "The Gap",
            "text"     => "Surfing is great here",
            "foto"     => "",
            "time"     => "7m"
            
        ],
        [
            "avatar"   => "",
            "username" => "Pavlov",
            "location" => "Moscow, Russia",
            "place"    => "Communist Pub",
            "text"     => "Great place to hang with Komrads",
            "foto"     => "",
            "time"     => "8m"
        ],
        [
            "avatar"   => "",
            "username" => "Goldtooth",
            "location" => "Goldshire, Eastern Kingdoms",
            "place"    => "The Inn",
            "text"     => "Me no take candle",
            "foto"     => "",
            "time"     => "10m"
        ],
        [
            "avatar"   => "",
            "username" => "Jef",
            "location" => "Retie, Belgium",
            "place"    => "Café Folia",
            "text"     => "Good beer here",
            "foto"     => "",
            "time"     => "20m"
        ],
        [
            "avatar"   => "",
            "username" => "Legolas",
            "location" => "Minas Tirith, Middle Earth",
            "place"    => "King's Quarters",
            "text"     => "They're taking the hobbits to Isengard",
            "foto"     => "",
            "time"     => "15m"
        ]
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        article{
            display: flex;
            font-family: Helvetica;
            background-color: white;
            border-bottom: 2px solid lightgrey;
        }
        .checkin-info{
            line-height: 0.5em;
        }
        .avatar{
            margin: 0.8em 2em 1em;
        }
        .heart{
            background-color: red;
            height: 15px;
            transform: rotate(-45deg);
            width: 15px;
        }
        .heart:before, .heart:after{
        content: "";
        background-color: red;
        border-radius: 50%;
        height: 15px;
        position: absolute;
        width: 15px;
        top: -7.5px;
        left: 0;
        }
        .heart:after{
            background-color: red;
            top: 0px;
            left: 7.5px;
        }
        .heart-container{
            padding-top: 1em;
            padding-right: 2em;
            margin-left: auto;
        }


    </style>
</head>
<body>
    <?php foreach($posts["checkin"] as $checkin){?>
    <article>
        <div class="avatar">
            <img src="https://api.adorable.io/avatars/65/abott@adorable.png" alt="profilepicture">
        </div>
        <div class="checkin-info">
            

                <h3><?php echo $checkin["username"];?></h3>
                <h1><?php echo $checkin["place"];?></h1>
                <h4><?php echo $checkin["location"];?></h4>
                <p><?php echo $checkin["text"];?></p>
                <img src="" alt="">
        </div>
        <div class="heart-container">
            <a href=""><div class="heart"></div></a>
            <p><?php echo $checkin["time"];?></p>
        </div>
    </article>
    <?php } ?>
</body>
</html>