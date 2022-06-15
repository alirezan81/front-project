<?php


if(!Authentication::check()){
    header("Location: index.php");
}else{

    if(isset($_POST['del'])){  // for group acction next releases
    
        $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
        $sql = "DELETE FROM `message`  WHERE `id`=?";
        $result = $dbc->query( $sql,$_POST['users'] );
        
        if($result){
            $_SESSION['info'] = "<div style='color: darkgreen;'><p>با موفقیت حذف شد!</p></div>";
            header("Location: index.php?p=tickets");
        }else{
            $_SESSION['info'] = "<div style='color: red;'><p>خطایی پیش آمد!</p></div>";
            header("Location: index.php?p=tickets");
        }         
    }
    
    
    $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
    if(Authorization::checkRole()){
        $sql = "SELECT * FROM `ticket`";
        $result = $dbc->query($sql);
    }else{
        $sql = "SELECT * FROM `ticket` WHERE sender=?";
        $result = $dbc->query($sql,Authentication::uid());
    }
    
    $tickets = $result->fetchAll();
    
    include 'view/tickets_view.php';

    $dbc -> close();
}


?>
