<?php
$id = $_GET['id'] ?? 0;
$dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
$sql = "SELECT * FROM `article` WHERE id=?";
$result = $dbc->query( $sql, $id);
$row = $result->fetchArray();
$dbc -> close();
?>

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
            <input type="text" required name="subject" value="<?php if(isset($row['subject']) ) echo $row['subject']; ?>">


            <label for="content"> محتوا: </label>
            <textarea name="content" required><?php if(isset($row['content']) ) echo $row['content']; ?></textarea>  

            <label for="state"> (مخصوص ادمین)وضعیت: </label>
            <label class="radio_lbl" for="state"> ذخیره </label>            
            <input type="radio" name="state" value="saved" <?php if( isset($row['state']) && $row['state'] == 'saved' ) echo 'checked';?>>

            <label class="radio_lbl" for="state"> انتشار </label>            
            <input type="radio" name="state" value="published" <?php if( isset($row['state']) && $row['state'] == 'published' ) echo 'checked';?>><br>

            <label for="cover"> کاور پست: </label>
            <input type="file" name="cover" required>
            
            <img class="cover" src="cover/<?php if(isset($row['cover']) ) echo $row['cover']; ?>" alt="تصویر کاور">

            <input class="btn" type="submit" value="ویرایش مقاله" name="submit"> 
            
                        
        </form>

    </div>

      
</body>
</html>