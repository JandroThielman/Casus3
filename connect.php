<?php

    try {
        $db = new PDO("mysql:host=localhost;dbname=statistiekensysteem", "root", "");
    } catch (PDOException $e) {
        die ("Error!: " . $e->getMessage());
    }

?>