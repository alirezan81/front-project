<?php

include 'config.php';
include 'lib/db.php';
include 'security.php';

if( !(Authorization::checkAccess() && isset($_GET['id'])) ){
    header("Location: catalog.php");  
}else{
    $id = $_GET['id'] ?? 0;
    $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
    $sql = "SELECT * FROM `article` WHERE id=?";
    $result = $dbc->query( $sql, $id);
    $row = $result->fetchArray();

    if( isset( $_POST['submit'] ) ){

        $img_loc = $_FILES['cover']['tmp_name']; 
        $img_name = $_FILES['cover']['name'];
        
        // if(empty($_FILES['cover'])){
        //     $img_name = $row['cover'];
        // }else{
            
        // $FileHandle = fopen("cover/".$row['cover'], 'w') or die("can't open file");
        // fclose($FileHandle);
        // unlink("cover/".$row['cover']);
           
        // }
    
        $sql = "UPDATE `article` SET subject=?,content=?,
        cover=?,state=? WHERE id=?";
    
        $result = $dbc->query( $sql, $_POST['subject'], $_POST['content'], $img_name,
        $_POST['state'], $id);
    
        $dbc -> close();
        
    
        move_uploaded_file($img_loc,"cover/{$img_name}");
    
    
        if($result){
            $_SESSION['info'] = "<div style='color: darkgreen;'><p>با موفقیت ویرایش شد!</p></div>";
            header("Location: editPost.php?id={$id}");
        }else{
            $_SESSION['info'] = "<div style='color: red;'><p>خطایی پیش آمد!</p></div>";
            header("Location: editPost.php?id={$id}");
        }
    
    }else{
        include 'view/editPost_view.php';
    }
    
    $dbc -> close();
}



?>