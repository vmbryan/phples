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
            "avatar"   => "https://s3.eu-west-3.amazonaws.com/pub.be/2015/11/Schermafbeelding-2015-11-17-om-19.32.07.png",
            "username" => "Michiel",
            "location" => "Hoboken, Antwerpen",
            "place"    => "Pukkelpop",
            "text"     => "Place to be voor goeie Fristi!",
            "foto"     => "",
            "time"     => "7m"
            
        ],
        [
            "avatar"   => "https://a.wattpad.com/useravatar/ForTheLichKing01.256.992595.jpg",
            "username" => "The Lich King",
            "location" => "Icecrown, Northrend",
            "place"    => "The Frozen Throne",
            "text"     => "It's a bit chilly here",
            "foto"     => "",
            "time"     => "8m"
        ],
        [
            "avatar"   => "https://pbs.twimg.com/profile_images/2878664862/68fbcb8670714b34e4953f1162c926c5.png",
            "username" => "Goldtooth",
            "location" => "Goldshire, Eastern Kingdoms",
            "place"    => "The Inn",
            "text"     => "Me no take candle",
            "foto"     => "",
            "time"     => "10m"
        ],
        [
            "avatar"   => "https://pm1.narvii.com/6731/4434edabb9997a01da2ac10600c40986eaeae6c0v2_128.jpg",
            "username" => "Geralt",
            "location" => "Hertch, Kaedwen",
            "place"    => "Kaer Morhen",
            "text"     => "Hmmm",
            "foto"     => "https://www.google.com/url?sa=i&url=https%3A%2F%2Fforums.cdprojektred.com%2Findex.php%3Fthreads%2Fgeralt-of-rivia-spoilers-from-books-and-games.54903%2Fpage-5&psig=AOvVaw3ogJjG9aDQL0vZDIhGOTr9&ust=1582816390618000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCOifw9vA7-cCFQAAAAAdAAAAABAK",
            "time"     => "20m"
        ],
        [
            "avatar"   => "https://pm1.narvii.com/5832/8b5b9c8c3a51030f68792fbde77ec01612706fd4_128.jpg",
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
        .header{
            background-color: orange;
            height: 100px;
            display: flex;
        }
        #headerAvatar{
            width: 45px;
            height: 45px;
            border-radius: 50%;
            margin: 0.8em 2.5em 1em;
        }
        #headerBtn{
            margin: 0.8em 1.8em 1em;
            margin-left: auto;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
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
        .avatar img{
            width: 65px;
            height: 65px;
            border-radius: 50%;
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
        .nav{
            background-color: lightgrey;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80px;
            padding-left: 40px;
            padding-right: 40px;
        }
        .nav button{
            width: 30px;
            height: 30px;
            border-radius: 50%;
            border: none;
            background-color: darkgrey;
        }


    </style>
</head>
<body>
    <?php include_once("header.inc.php");?>

    <?php foreach($posts["checkin"] as $checkin){?>
    <article>
        <div class="avatar">
            <img src="<?php echo $checkin["avatar"];?>" alt="profilepicture">
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
    <?php include_once("nav.inc.php");?>
</body>
</html>