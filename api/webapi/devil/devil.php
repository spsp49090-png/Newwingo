<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'investme_allgame12');
define('DB_PASSWORD', 'investme_allgame12');
define('DB_NAME', 'investme_allgame12');

function getDBConnection() {
    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
?>
