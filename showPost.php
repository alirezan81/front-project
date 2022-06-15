<?php

    $dbc = new DB($db_host, $db_user, $db_pass, $db_name);

    $sql = "SELECT * FROM article WHERE id=?";

    $result = $dbc -> query( $sql , $_GET['id']);
    $row = $dbc -> fetchArray();


    include 'view/showPost_view.php';

    $dbc -> close();
?>