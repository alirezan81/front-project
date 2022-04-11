<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="article form">
    <title>Add Article</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body dir="rtl">
    <div class="box">
        <h1>افزودن مقاله جدید</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <?php
                if(isset($_SESSION['info'])){
                    echo $_SESSION['info'];
                    unset($_SESSION['info']);
                }
            ?>
                     
            <label for="subject"> موضوع پست آموزشی: </label>
            <input type="text" required name="subject">


            <label for="content"> محتوا: </label>
            <textarea name="content" required></textarea>  

            <label for="state"> (مخصوص ادمین)وضعیت: </label>
            <label class="radio_lbl" for="state"> ذخیره </label>            
            <input type="radio" name="state" value="saved" checked>

            <label class="radio_lbl" for="state"> انتشار </label>            
            <input type="radio" name="state" value="published"><br>

            <label for="cover"> کاور پست: </label>
            <input type="file" required name="cover">

            <input class="btn" type="submit" value="افزودن مقاله" name="submit"> 
            
                        
        </form>

    </div>

      
</body>
</html>