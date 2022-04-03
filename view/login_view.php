<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="login form">
    <title>Login</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body dir="rtl">
    <div class="box">
        <h1>ورود</h1>
        <form action="" method="post">  
            <?php
                if(isset($_SESSION['info'])){
                    echo $_SESSION['info'];
                    unset($_SESSION['info']);
                }
            ?>            
            <label for="email"> ایمیل: </label>
            <input type="email" required name="email">

            <label for="password"> رمز عبور: </label>
            <input type="password" required name="password">

            <input class="btn" type="reset" value="پاک کردن"> 
            <input class="btn" type="submit" value="ورود" name="submit">    
        </form>
    </div>      
</body>
</html>