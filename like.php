<?php
include 'config.php';
include 'lib/db.php';
include 'security.php';


$dbc = new DB($db_host, $db_user, $db_pass, $db_name);

$post_id = $_GET['post_id'];
$user_id = Authentication::uid();

$sql = "SELECT * FROM `like_product` WHERE post_id=? AND user_id=?";
$result = $dbc->query($sql, $post_id, $user_id);

if ($row = $result->fetchArray()) {
    $sql = "DELETE FROM `like_product`  WHERE `id`=? ";
    $dbc->query($sql, $row['id']);

    echo "unlike";
} else {
    $sql = "INSERT INTO like_product(post_id,user_id) VALUES (?,?)";
    $dbc->query($sql, $post_id, $user_id);

    echo "like";
}

$dbc->close();
