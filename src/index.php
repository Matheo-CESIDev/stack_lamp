<?php
echo "<h1>Test de la Stack Docker Compose</h1>";
echo "<p>PHP fonctionne (Version " . phpversion() . ")</p>";
$servername = "db";
$username = "user";
$password = "password";
$dbname = "company";
$connected = false;
for ($i = 0; $i < 30; $i++) {
    try {
        $conn = new mysqli($servername, $username, $password, $dbname);
        $connected = true;
        break;
    } catch (mysqli_sql_exception $e) {
        usleep(500000);
    }
}
if (!$connected) {
    die("<p>Echec connexion MySQL</p>");
}
echo "<p>Connexion MySQL OK</p>";
?>
