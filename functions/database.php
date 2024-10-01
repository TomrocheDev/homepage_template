<?php
function db_connect() {
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'base_site_db';
    $conn = new mysqli($servername, $username, $password, $database);
    
    if ($conn->connect_error) {
        die('Verbinding mislukt: ' . $conn->connect_error);
    }

    return $conn;
}

function fetch_rows($connection, $query) {
    $aRawdata = mysqli_query($connection, $query);
    $aData = [];

    while ($row = $aRawdata->fetch_assoc()) {
        $aData[] = $row;
    }
    return $aData;
}