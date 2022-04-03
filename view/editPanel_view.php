<?php

$dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
$sql = "SELECT * FROM `users`";
$result = $dbc->query($sql);
$row = $result->fetchAll();
$dbc -> close();
?>

<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="users form">
    <title>Users</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body dir="rtl">
    <div class="box">
        <h1>کاربران</h1>
        <form action="" method="post">
            <?php
                if(isset($_SESSION['info'])){
                    echo $_SESSION['info'];
                    unset($_SESSION['info']);
                }
            ?>
            <select name="users" multiple class="user_list">
                <?php
                foreach($row as $user){ 
                    echo"<option value='{$user['id']}'>".($user['role'] == "admin" ? "ادمین" : "کاربر")." - {$user['fullname']} - {$user['email']}</option>";
                }
                ?>
            </select>
            <input class="btn" type="submit" value="حذف کاربر" name="del"> 
            <input class="btn" type="submit" value="ویرایش کاربر" name="edit">    
            <input class="btn" type="submit" value="رفرش کاربران" name="ref"> 
        </form>

    </div>

      
</body>
</html>