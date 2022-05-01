<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="users form">
    <title>Users</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://kit.fontawesome.com/18c7498de3.js" crossorigin="anonymous"></script>
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
            
            <button class="btn" type="submit" name="del">
                <i class="fa-solid fa-user-slash"></i>
                حذف کاربر
            </button> 

            <button class="btn" type="submit" name="edit">
                <i class="fa-solid fa-user-pen"></i>
                ویرایش کاربر
            </button> 
        </form>

    </div>

      
</body>
</html>