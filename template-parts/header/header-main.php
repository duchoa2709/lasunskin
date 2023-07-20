<?php 
global $theme_uri;
?>
<div class="header">
<?php get_template_part('searchform'); ?>

    <div class="logo">
        <img src="<?= $theme_uri; ?>/Public/images/Social%20Media/text/L.svg" alt="">
        <img src="<?= $theme_uri; ?>/Public/images/Social%20Media/text/A.svg" alt="">

        <img class="text-left" src="<?= $theme_uri; ?>/Public/images/Social%20Media/text/S.svg" alt="">
        <img src="<?= $theme_uri; ?>/Public/images/Social%20Media/text/U.svg" alt="">
        <img class="text-right" src="<?= $theme_uri; ?>/Public/images/Social%20Media/text/N.svg" alt="">

        <img src="<?= $theme_uri; ?>/Public/images/Social%20Media/text/S.svg" alt="">
        <img src="<?= $theme_uri; ?>/Public/images/Social%20Media/text/K.svg" alt="">
        <img src="<?= $theme_uri; ?>/Public/images/Social%20Media/text/I.svg" alt="">
        <img src="<?= $theme_uri; ?>/Public/images/Social%20Media/text/N.svg" alt="">
    </div>

    <div class="tools" role="search">
        <div class="account">
            <div>
                <a class="btn" href="#"><img src="<?= $theme_uri; ?>/Public/images/data/account.svg" alt=""></a>
            </div>
            <div class="account_content">
                <a href="#">Đăng nhập</a><br>
                <a href="#">Đăng ký</a>
            </div>
        </div>
        <div class="cart">
            <a href="#" class="btn shopping"><img src="<?= $theme_uri; ?>/Public/images/data/gioHang.svg" alt=""></a>
            <div> Giỏ hàng (1)</div>
        </div>
    </div>
</div>