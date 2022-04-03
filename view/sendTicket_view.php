<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ticket form">
    <title>SendTiket</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body dir="rtl">
    <div class="box">
        <h1>ارسال تیکت</h1>
        <form action="" method="post">
            <?php
                if(isset($_SESSION['info'])){
                    echo $_SESSION['info'];
                    unset($_SESSION['info']);
                }
            ?>
            
            <label for="section"> بخش: </label>
            <select name="section" id="">
                <option value="فنی">فنی</option>
                <option value="آموزشی">آموزشی</option>
                <option value="مجوز">مجوز و دسترسی</option>
            </select>
            
            <label for="title"> موضوع: </label>
            <input type="text" required name="title">


            <label for="description"> توضیحات: </label>
            <textarea name="description" required></textarea>  
            <input class="btn" type="reset" value="پاک کردن"> 
            <input class="btn" type="submit" value="ارسال" name="submit"> 
                        
        </form>

    </div>

      
</body>
</html>