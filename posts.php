<?php

if(!Authentication::check()){
    header("Location: index.php");
}else{

    if(isset($_POST['del'])){  // for group acction next releases
    
        $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
        $sql = "DELETE FROM `article`  WHERE `id`=?";
        $result = $dbc->query( $sql,$_POST['users'] );
        
        if($result){
            $_SESSION['info'] = "<div style='color: darkgreen;'><p>با موفقیت حذف شد!</p></div>";
            header("Location: index.php?p=posts");
        }else{
            $_SESSION['info'] = "<div style='color: red;'><p>خطایی پیش آمد!</p></div>";
            header("Location: index.php?p=posts");
        }         
    }
    
    
    $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
    
    if(Authorization::checkRole() && !isset($_GET['myPosts'])){
        $sql = "SELECT * FROM `article`";
        $result = $dbc->query($sql);
    }else{
        $sql = "SELECT * FROM `article` WHERE writer=?";
        $result = $dbc->query($sql,Authentication::uid());
    }

    $row = $result->fetchAll();
    include 'view/posts_view.php';
    $dbc -> close();
}


?>
