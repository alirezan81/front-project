<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Articles posts">
    <title>Articles</title>
    <link rel="stylesheet" href="styles/card.css">
    <script src="https://kit.fontawesome.com/18c7498de3.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="box medium content">
        <h1><?php echo $row['subject']; ?></h1>

        <img src="profile/alireza_norouzi.jpg" alt="" class="profile">
        <p>نویسنده: علیرضا نوروزی</p>
        <p>زمان مطالعه: 15 دقیقه</p>
        <p>
            <?php for($i=0;$i<5;$i++){
                echo " <i id='star-{$i}' class='star fa-regular fa-star' style='color:darkorange;' onclick='toggle(this);'></i>";
            } ?>
        </p>
       
        <?php echo $row['content']; ?> 
    </div>
   
    <script>
        function toggle(el){
            if ( el.classList.contains('fa-regular') ){
                    el.classList.toggle('fa-solid');
         }       
        }
              
    </script>
   
</body>
</html>
