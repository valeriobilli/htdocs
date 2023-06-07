<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>primo php</title>
    <style>
        body {
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <?php 
        $nome = "Valerio";
    ?>
    <main>
        <h1>Hello World</h1>
        <div>Questa è la mia prima pagina PHP</div>
        <div>Benvenuto <?php echo $nome ?>!</div>
    </main>

    <?php 
    $giorno = "mercoledì";
    echo $giorno;
    ?>

    <div>Oggi è <?php echo $giorno ?></div>
   
</body>
</html>