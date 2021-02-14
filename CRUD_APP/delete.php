<?php 

    $user = $_GET['id'];
    $link = mysqli_connect('127.0.0.1', 'homestead', 'secret', 'crud_app');
    $deleteSQL = "DELETE FROM users WHERE id='$user';";
    $query = mysqli_query($link, $deleteSQL);

    mysqli_close($link);
    
    header("Location: index.php");