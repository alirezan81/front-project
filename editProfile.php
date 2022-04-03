<?php
session_start();

include 'config.php';
include 'lib/db.php';
include 'view/editProfile_view.php';

if( isset( $_POST['submit'] ) ){

    $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
    if($_POST['password'] == ""){
        $password = $row['password'];
    }else{
        $password = $_POST['password'];
    }
    $sql = "UPDATE `users` SET username=?,password=?,
    fullname=?,email=?,phone=?,gender=?, age=?, city=?, edu=?, major=? WHERE id=?";
    $result = $dbc->query( $sql, $_POST['username'], $password, $_POST['fullname'], $_POST['email'],
    $_POST['phone'], $_POST['gender'], $_POST['age'], $_POST['city'], $_POST['edu'], $_POST['major'], $id);
    $dbc -> close();

    if($result){
        $_SESSION['info'] = "<div style='color: darkgreen;'><p>با موفقیت ویرایش شد!</p></div>";
        header("Location: editProfile.php");
    }else{
        $_SESSION['info'] = "<div style='color: red;'><p>خطایی پیش آمد!</p></div>";
        header("Location: editProfile.php");
    }

    
    }


?>