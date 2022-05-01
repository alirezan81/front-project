<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Articles posts">
    <title>Articles</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/card.css">
    <script src="https://kit.fontawesome.com/18c7498de3.js" crossorigin="anonymous"></script>
</head>
<body dir="rtl">
    <div class="info">
        <h1>تنقلات پایتونی</h1>
        <?php
            if( count( $posts ) == 0 ){
                echo '<p>مقاله ای یافت نشد</p>';
            }
            else{
                foreach( $posts as $row ){              
                    include 'view/template/card.php';
                }
            }
        ?>
    </div>
   
</body>
</html>