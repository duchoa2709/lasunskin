<?php global $theme_uri;

    $hero_class = 'hero_nomal';
    if ( is_front_page()) {
        $hero_class = '';
    }
?>
<section class="hero <?= $hero_class; ?>">
    <div class="line"></div>
    <?php get_template_part('template-parts/navigation/menu','main'); ?>
</div>
<?php if ( is_front_page()) : ?>
<div class="img_gradient">
    <img class="img_header" src="<?= $theme_uri; ?>/Public/images/imgBanner.jpg" alt="">
</div>
<?php endif; ?>
</section>
</header>