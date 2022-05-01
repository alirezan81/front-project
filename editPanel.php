<?php

include 'config.php';
include 'lib/db.php';
include 'security.php';

if(!Authorization::checkRole()){
    header("Location: showPosts.php");
}else{
    if(!empty($_POST['users'])){
        if(isset($_POST['edit'])){ 
            header("Location: editUser.php?id={$_POST['users']}");
        }elseif(isset($_POST['del'])){
        
            $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
            $sql = "DELETE FROM `users`  WHERE `id`=?";
            $result = $dbc->query( $sql,$_POST['users'] );
            
            if($result){
                $_SESSION['info'] = "<div style='color: darkgreen;'><p>با موفقیت حذف شد!</p></div>";
                header("Location: editPanel.php");
            }else{
                $_SESSION['info'] = "<div style='color: red;'><p>خطایی پیش آمد!</p></div>";
                header("Location: editPanel.php");
            }         
        }
    }
    
    $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
    $sql = "SELECT * FROM `users`";
    $result = $dbc->query($sql);
    $row = $result->fetchAll();
    $dbc -> close();
    
    include 'view/editPanel_view.php';
}


?>