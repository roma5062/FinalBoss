<?php
include 'config.php';

if (isset($_POST['title']) && isset($_POST['content'])) {

    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $comment = mysqli_real_escape_string($connection, $_POST['content']);

    $query = "INSERT INTO posts (title, content) VALUES ('$title', '$comment')";
    mysqli_query($connection, $query);
}

mysqli_close($connection);

header("Location: index.php");