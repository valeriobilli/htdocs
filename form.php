<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="index.php" method="GET">
        <div>
            <input type="text" name="badWord" placeholder="Parola da censurare">
        </div>
        <div>
            <textarea name="paragraph" id="paragraph" cols="30" rows="10" placeholder="Inserisci del testo"></textarea>
        </div>
        <button type="submit">Invia</button>
    </form> 
</body>
</html>