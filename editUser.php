<?php

if(!Authorization::checkRole()){
    header("Location: index.php?p=editProfile");
}elseif(!isset($_GET['id'])){
    header("Location: index.php?p=users");
}else{

    $id = $_GET['id'];
    $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
    $sql = "SELECT * FROM `users` WHERE id=?";
    $result = $dbc->query( $sql, $id);
    $row = $result->fetchArray();


    if( isset( $_POST['submit'] ) ){

        if($_POST['password'] == ""){
            $password = $row['password'];
        }else{
            $password = $_POST['password'];
        }
        
        $sql = "UPDATE `users` SET username=?,password=?,
        fullname=?,email=?,phone=?,gender=?, age=?, city=?, edu=?, major=?, role=?, level=? WHERE id=?";
        $result = $dbc->query( $sql, $_POST['username'], $password, $_POST['fullname'], $_POST['email'],
        $_POST['phone'], $_POST['gender'], $_POST['age'], $_POST['city'], $_POST['edu'], $_POST['major'], 
        $_POST['role'], $_POST['level'], $id);
        $dbc -> close();


        if($result){
            $_SESSION['info'] = "<div style='color: darkgreen;'><p>با موفقیت ویرایش شد!</p></div>";
            header("Location: index.php?p=editUser");
        }else{
            $_SESSION['info'] = "<div style='color: red;'><p>خطایی پیش آمد!</p></div>";
            header("Location: index.php?p=editUser");
        }

    }else{
        include 'view/editUser_view.php';
    }
    $dbc -> close();
}
?>