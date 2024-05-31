<?php

function gebruikerInfo() {
    
    include "connect.php";

    $land = "Nederlands";
    $ip = gethostbyname(gethostname());
    $provider = "KPN";
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $datumtijd = date("Y-m-d H:i:s");
    $referer = $_SERVER['HTTP_REFERER'];

    $query = $db->prepare("INSERT INTO bezoekers (id, land, ip_adres, prov, browser, datum_tijd, referer) VALUES (NULL, :land, :ip, :prov, :browser, :dt, :referer)");
    $query->bindParam(':land', $land);
    $query->bindParam(':ip', $ip);
    $query->bindParam(':prov', $provider);
    $query->bindParam(':browser', $browser);
    $query->bindParam(':dt', $datumtijd);
    $query->bindParam(':referer', $referer);
    $query->execute();

}

function Tabel(){

    include "connect.php";

    if (isset($_POST['desc-land'])) {
        $query = $db->prepare("SELECT * FROM bezoekers ORDER BY bezoekers.land DESC");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC); 
    
            foreach ($result as $info) {
    
                echo "<tr>";
                    echo "<td>" . $info['id'] . "</td>";
                    echo "<td>" . $info['land'] . "</td>";
                    echo "<td>" . $info['ip_adres'] . "</td>";
                    echo "<td>" . $info['prov'] . "</td>";
                    echo "<td>" . $info['browser'] . "</td>";
                    echo "<td>" . $info['datum_tijd'] . "</td>";
                    echo "<td>" . $info['referer'] . "</td>";
                echo "</tr>";
    
            }
    } elseif (isset($_POST['desc-datum'])) {
        $query = $db->prepare("SELECT * FROM bezoekers ORDER BY bezoekers.datum_tijd DESC");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC); 
    
            foreach ($result as $info) {
    
                echo "<tr>";
                    echo "<td>" . $info['id'] . "</td>";
                    echo "<td>" . $info['land'] . "</td>";
                    echo "<td>" . $info['ip_adres'] . "</td>";
                    echo "<td>" . $info['prov'] . "</td>";
                    echo "<td>" . $info['browser'] . "</td>";
                    echo "<td>" . $info['datum_tijd'] . "</td>";
                    echo "<td>" . $info['referer'] . "</td>";
                echo "</tr>";
    
            }
    } else {
        $query = $db->prepare("SELECT * FROM bezoekers ORDER BY bezoekers.land ASC");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC); 
    
            foreach ($result as $info) {
    
                echo "<tr>";
                    echo "<td>" . $info['id'] . "</td>";
                    echo "<td>" . $info['land'] . "</td>";
                    echo "<td>" . $info['ip_adres'] . "</td>";
                    echo "<td>" . $info['prov'] . "</td>";
                    echo "<td>" . $info['browser'] . "</td>";
                    echo "<td>" . $info['datum_tijd'] . "</td>";
                    echo "<td>" . $info['referer'] . "</td>";
                echo "</tr>";
    
            }
    }



}

function inloggen(){
    if (isset($_POST['inloggen'])) {
        header("Location: inloggen.php");
    }
}

function ingelogd(){

    if (isset($_POST['inlog'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == 'admin' & $password == 'admin') {
            header("Location: info.php");
        }

    }
}


?>