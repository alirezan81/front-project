<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="edit article form">
    <title>Edit Article</title>
    <script src="https://kit.fontawesome.com/18c7498de3.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/2qbo3d4rvp07khokrrfh5f207e3cp1deao5n3r91xlo85avk/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#editor'
        });
    </script>
</head>
<body dir="rtl">
    <div class="box medium">
        <h1>ویرایش مقاله جدید</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <?php
                if(isset($_SESSION['info'])){
                    echo $_SESSION['info'];
                    unset($_SESSION['info']);
                }
            ?>
                     
            <label for="subject"> موضوع پست آموزشی: </label>
            <input type="text" required name="subject" value="<?php if(isset($row['subject']) ) echo $row['subject']; ?>">


            <textarea name="content" id="editor"><?php if(isset($row['content']) ) echo $row['content']; ?></textarea>  

            <br>

            <label for="time"> زمان پیشنهادی مطالعه: </label>
            <input type="number" required name="time" 
                placeholder="مثال: 10 دقیقه" style="width:20%;"
                value="<?php if(isset($row['time']) ) echo $row['time']; ?>"
            >

            <br>

            <label class="radio_lbl" for="state"> ذخیره </label>            
            <input type="radio" name="state" value="saved" <?php if( isset($row['state']) && $row['state'] == 'saved' ) echo 'checked';?>>

            <label class="radio_lbl" for="state"> انتشار </label>            
            <input type="radio" name="state" value="published" <?php if( isset($row['state']) && $row['state'] == 'published' ) echo 'checked';?>><br>

            <label for="cover"> کاور پست: </label>
            <input type="file" name="cover">
            
            <img class="cover" src="cover/<?php if(isset($row['cover']) ) echo $row['cover']; ?>" alt="تصویر کاور">
            
            <button class="btn" type="submit" name="submit">
                <i class="fa-solid fa-file-pen"></i>
                ویرایش مقاله
            </button>
              
        </form>

    </div>

      
</body>
</html>
