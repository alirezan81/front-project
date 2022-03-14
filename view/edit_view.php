<?php
$id = $_GET['id'] ?? 0;
$dbc = new mysqli( $db_host, $db_user, $db_pass, $db_name);
$dbc -> set_charset('utf8');

$sql = "SELECT * FROM `users` WHERE id='$id'";
$result = $dbc->query( $sql );
$row = $result->fetch_assoc();
$dbc -> close();
?>

<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="edit form">
    <title>Edit</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body dir="rtl">
    <div class="box">
        <h1>ویرایش پروفایل</h1>
        <form action="" method="post">
            <label for="username"> نام کاربری: </label>
            <input type="text" required name="username" value="<?php echo $row['username'] ?>">           
            
            <label for="password"> رمز عبور: </label>
            <input type="password" required name="password" value="<?php echo $row['password'] ?>">

            <label for="fullname"> نام کامل: </label>
            <input type="text" required name="fullname" value="<?php echo $row['fullname'] ?>">

            <label for="email"> ایمیل: </label>
            <input type="email" required name="email" value="<?php echo $row['email'] ?>">

            <label for="phone"> همراه: </label>
            <input type="tel" required name="phone" value="<?php echo $row['phone'] ?>"><br>

            <input class="btn" type="reset" value="پاک کردن"> 
            <input class="btn" type="submit" value="ویرایش" name="submit">    
        </form>

    </div>

    <?php
    if(!$row){
        echo "<div class='box'><h3>کاربر یافت نشد</h3></div>";
    } 
    ?>
    
      
</body>
</html>