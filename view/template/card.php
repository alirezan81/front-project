<article class="card evelated">
    <img class="card-img-top" src="cover/<?php echo $row['cover']; ?>" alt="تصویر کاور">
    <div class="card-body">
        <h3 class="card-title"><?php echo $row['subject']; ?></h3>
        <p class="card-sub-head"><?php echo ($writer['role'] == "admin" ? "ادمین" : "کاربر") . " " . ($writer['fullname']); ?></p>
        <p class="card-sub-head"><?php echo $row['time'] . " دقیقه"; ?></p>
        <p class="card-sub-head">پیش نیاز</p>
        <!-- <p class="card-text">محتوا</p> -->
        <div style="text-align:left;">
            <?php if(Authentication::check()){ ?>
            <i class="like fa-regular fa-heart
            <?php
                $user_id = Authentication::uid();
                $post_id = $row['id'];

                $sql = "SELECT * FROM `like_product` WHERE post_id=? AND user_id=?";
                $result = $dbc->query($sql, $post_id, $user_id);
                if ($result->fetchArray()){
                    echo 'fa-solid';
                }
            ?>
            " style="color: crimson;" onclick="toggle(this,<?php echo $row['id'] ?>);"></i>
            <?php } ?>
            <a href="index.php?p=showPost&id=<?php echo $row['id'] ?>" class="btn">مطالعه</a>
        </div>
    </div>
</article>

<script>
    function toggle(el, postId) {
        if (el.classList.contains('fa-regular')) {
            fetch(`like.php?post_id=${postId}`).then(() => {
                el.classList.toggle('fa-solid');
            })
        }
    }
</script>