<?php
session_start();

include 'config.php';
include 'lib/db.php';
include 'view/editPost_view.php';


if( isset( $_POST['submit'] ) ){

    $img_loc = $_FILES['cover']['tmp_name']; 
    $img_name = $_FILES['cover']['name'];
    
    // if(empty($_FILES['cover'])){
    //     $img_name = $row['cover'];
    // }else{
       
    // }


    $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
    $sql = "UPDATE `article` SET subject=?,content=?,
    cover=?,state=? WHERE id=?";

    $result = $dbc->query( $sql, $_POST['subject'], $_POST['content'], $img_name,
    $_POST['state'], $id);

    $dbc -> close();
    

    move_uploaded_file($img_loc,"cover/{$img_name}");

    $FileHandle = fopen("cover/".$row['cover'], 'w') or die("can't open file");
    fclose($FileHandle);
    unlink("cover/".$row['cover']);

    if($result){
        $_SESSION['info'] = "<div style='color: darkgreen;'><p>با موفقیت ویرایش شد!</p></div>";
        header("Location: editPost.php?id={$id}");
    }else{
        $_SESSION['info'] = "<div style='color: red;'><p>خطایی پیش آمد!</p></div>";
        header("Location: editPost.php?id={$id}");
    }
}