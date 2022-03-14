<?php
include 'config.php';
include 'view/contact_view.php';

if( isset( $_POST['submit'] ) ){ // اگر از فرم آمده
    // a. validate data
    // b. عملیات درج
    // 1. connect db
    $dbc = new mysqli( $db_host, $db_user, $db_pass, $db_name);
    $dbc -> set_charset('utf8');
    // 2. create query
    $sql = "INSERT INTO message(email,title,description) 
    VALUES('{$_POST['email']}', '{$_POST['title']}', '{$_POST['description']}')";
    // 3. execute query
    $result = $dbc -> query( $sql );
    // 4. close connection
    $dbc -> close();

    if($result){
        echo "<div class='box'><h3>با موفقیت درج شد</h3></div>";
    }else{
        echo "<div class='box'><h3>خطایی پیش آمد</h3></div>";
    }

    // include a view
   
}