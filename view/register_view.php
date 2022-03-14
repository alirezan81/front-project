<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="register form">
    <title>Register</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body dir="rtl">
    <div class="box">
        <h1>ثبت نام</h1>
        <form action="" method="post">
            <label for="username"> نام کاربری: </label>
            <input type="text" required name="username">           
            
            <label for="password"> رمز عبور: </label>
            <input type="password" required name="password">

            <label for="fullname"> نام کامل: </label>
            <input type="text" required name="fullname">

            <label for="email"> ایمیل: </label>
            <input type="email" required name="email">

            <label for="phone"> همراه: </label>
            <input type="tel" required name="phone"><br>

            <input class="btn" type="reset" value="پاک کردن"> 
            <input class="btn" type="submit" value="ثبت نام" name="submit">    
        </form>

    </div>

      
</body>
</html>