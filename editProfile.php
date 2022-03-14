<?php
include 'config.php';
include 'view/edit_view.php';

if( isset( $_POST['submit'] ) ){

    $dbc = new mysqli( $db_host, $db_user, $db_pass, $db_name);
    $dbc -> set_charset('utf8');

    $sql = "UPDATE `users` SET username='{$_POST['username']}',password='{$_POST['password']}',
    fullname='{$_POST['fullname']}',email='{$_POST['email']}',phone='{$_POST['phone']}' WHERE id='$id'";
    $result = $dbc->query( $sql );
    $dbc -> close();

    if($result){
        echo "<div class='box'><h3>با موفقیت ویرایش شد</h3></div>";
    }else{
        echo "<div class='box'><h3>خطایی پیش آمد</h3></div>";
    }

    }

    // include a view

?>