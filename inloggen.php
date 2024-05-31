<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>inloggen</title>
</head>
<body>

    <?php

        include "function.php";
        ingelogd();

    ?>

    <form method="post">

        <label>Username:</label>
        <input type="text" name="username" placeholder="username">
        <br><br>
        <label>password:</label>
        <input type="text" name="password" placeholder="password">
        <br><br>
        <button name="inlog">Inloggen</button>

    </form>
    
</body>
</html>