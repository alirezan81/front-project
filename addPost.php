<?php

include 'config.php';
include 'lib/db.php';
include 'security.php';
include 'view/addPost_view.php';



if(!Authorization::checkAccess()){
    header("Location: catalog.php");  
}else{
    $id = Authentication::uid();

    if( isset( $_POST['submit'] ) ){

        $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
    
        $sql = "SELECT fullname,role FROM `users` WHERE id=?";
        $result = $dbc->query( $sql, $id);
        $row = $result->fetchArray();
    
        
        $img_loc = $_FILES['cover']['tmp_name'];
        $img_name = $_FILES['cover']['name'];
    
    
        $sql = "INSERT INTO article(writer,role,subject,content,cover,state) 
        VALUES(?,?,?,?,?,?)";
    
        $result = $dbc -> query( $sql, $row['fullname'], $row['role'], $_POST['subject'],
        $_POST['content'], $img_name, $_POST['state']);
    
        $dbc -> close();
    
        move_uploaded_file($img_loc,"cover/{$img_name}");
    
        if($result){
            $_SESSION['info'] = "<div style='color: darkgreen;'><p>با موفقیت افزوده شد!</p></div>";
            header("Location: addPost.php");
        }else{
            $_SESSION['info'] = "<div style='color: red;'><p>خطایی پیش آمد!</p></div>";
            header("Location: addPost.php");
        }
    
    
    }
}

