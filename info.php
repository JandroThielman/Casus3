<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Info</title>
</head>
<body class="info-body">
    <h1>Statistiekensysteem</h1>

    <table class='tabel'>

        <form method="post">

            <tr>
                <th>ID</th>
                <th><button name="desc-land">Land &#11163;</button></th> 
                <th>IP</th>
                <th>Provider</th>
                <th>browser</th>
                <th class="br"><button name="desc-datum">Datum en Tijd &#11163;</button></th>
                <th>Referer</th>
            </tr>

        </form>

        <?php

            include "function.php";
            Tabel();

        ?>

    </table>

</body>
</html>