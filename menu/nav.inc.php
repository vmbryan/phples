<?php
        $currentpage = $_SERVER["SCRIPT_NAME"];
        $isHome = "home";
        $isFeature = "features";
        $x ="";
        $y = "";
        
        if(strpos($currentpage,$isHome)){
            $x = "active";
        }elseif(strpos($currentpage,$isFeature)){
            $y = "active";
        }


?>
<nav>
    <li><a class="<?php echo $x?>" href="home.php">Home</a></li>
    <li><a class="<?php echo $y?>" href="features.php">Features</a></li>
</nav>