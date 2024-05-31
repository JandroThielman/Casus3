<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Jandro</title>
</head>
<body class='body1'>

    <form method="post">

        <button class="btn" name="inloggen">Statistiekensysteem Zien</button>

    </form>

    <h1>Jandro Thielman</h1>

    <?php

        include 'function.php';
        gebruikerInfo();
        inloggen();

        echo "(❁´◡`❁)<br><br>";

    ?>
    
</body>
</html>