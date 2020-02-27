<?php include("php.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php foreach($todos as $key => $item){
        foreach($item["duration"] as $duration){

?>
    <article>
        <p><?php echo $duration;?></p>
        <strong><?php?></strong>
        <p><?php ?></p>
    </article>
<?php }}?>
</body>
</html>