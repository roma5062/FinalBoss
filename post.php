<?php
include 'config.php';

$query = "SELECT * FROM posts ORDER BY id DESC";

$result = mysqli_query($connection, $query);
$text = array();

while ($row = mysqli_fetch_assoc($result)) {
    $text = $row;
}

echo json_encode($text);

mysqli_close($connection);