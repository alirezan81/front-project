<?php
include 'config.php';
include 'view/register_view.php';

if( isset( $_POST['submit'] ) ){

    $dbc = new mysqli( $db_host, $db_user, $db_pass, $db_name);
    $dbc -> set_charset('utf8');

    $email = $_POST['email'];
    $sql = "SELECT email FROM `users` WHERE email='$email'";
    $result = $dbc->query( $sql );
    
    if (!$row = $result->fetch_row()){
        $sql = "INSERT INTO users(username,password,fullname,email,phone) 
        VALUES('{$_POST['username']}', '{$_POST['password']}', '{$_POST['fullname']}', '{$email}', '{$_POST['phone']}')";

        $result = $dbc -> query( $sql );

        $dbc -> close();

        if($result){
            echo "<div class='box'><h3>با موفقیت درج شد</h3></div>";
        }else{
            echo "<div class='box'><h3>خطایی پیش آمد</h3></div>";
        }

    }else{
        echo "<div class='box'><h3>کاربری با این ایمیل ثبت نام کرده است</h3></div>";
    }

    // include a view
   
}



?>