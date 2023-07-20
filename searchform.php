<?php global $theme_uri; 

?>

<form action="" method="GET" class="search">
        <input type="text" name="s" placeholder="Nhập tên sản phẩm...">
        <button type="submit">
            <img src="<?= $theme_uri; ?>/Public/images/data/find.svg" alt="">
        </button>
    </form>