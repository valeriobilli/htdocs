<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badword</title>
</head>
<body>
    <?php 
    $badWord = $_GET["badWord"];
    $paragraph = $_GET["paragraph"];
    ?>
    <div>La parola da censurare è: <?php echo $badWord; ?> </div>
    <div> <?php echo $paragraph; ?> </div>
</body>
</html>