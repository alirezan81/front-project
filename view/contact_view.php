<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="contact form">
    <title>Contact</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body dir="rtl">
    <div class="box">
        <h1>تماس با ما</h1>
        <form action="contact_controller.php" method="post">
                <label for="email"> ایمیل: </label>
                <input type="email" required name="email"><br>

    
                <label for="title"> عنوان: </label>
                <input type="text" required name="title"><br>
    
    
                <label for="description">متن پیام: </label>
                <textarea name="description" required></textarea><br>   

                <input class="btn" type="reset" value="پاک کردن"> 
                <input class="btn" type="submit" value="ارسال" name="submit"> 
                
                
        </form>

    </div>

      
</body>
</html>