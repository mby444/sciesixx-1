<?php
require "../database/connection.php";

function getPhotoCount() {
    global $connection;
    $query = $connection->query("SELECT * FROM photo_images");
    $result = $query->fetch_all(MYSQLI_ASSOC);
    return json_encode($result);
}
?>