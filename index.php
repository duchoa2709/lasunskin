<?php get_header(); ?>

<!-- Content -->
<div class="content">
    <div class="container">
        <div>
            <h1 class="title_content">Sản phẩm nổi bật</h1>
        </div>

        <!-- product -->
        <!-- start loop -->
        <div class="row product">
            <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/post/product',null,['post_id'=>get_the_id()]); ?>
            <?php endwhile; ?>
        </div>
        <!-- end loop -->
        
    </div>
</div>
<!-- news -->
<div class="news">
    <div class="container">
        <h1 class="textNews">Tin tức - Sự kiện</h1>

        <div class="newsItem">
            <div class="item1">
                <img src="<?= $theme_uri; ?>/Public/images/news1.png" alt="">
                <div class="date">08/09/2023</div>
                <h4>Cẩm Nang Chăm Sóc Da Mặt Cùng La Sun Skin</h4>
                <div class="description">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae aliquam optio, perferendis
                    voluptates dolorum repudiandae in? Necessitatibus dicta dolores eos facere optio modi
                    laboriosam, consequuntur magnam reprehenderit rem, quaerat ab.
                </div>
            </div>
            <div>
                <div class="item">
                    <img src="<?= $theme_uri; ?>/Public/images/news2.png" alt="">
                    <div class="date">08/09/2023</div>
                    <h4>Lorem ipsum dolor sit amet, sect adipiscing elit. </h4>
                </div>
            </div>

            <div>
                <div class="item">
                    <img src="<?= $theme_uri; ?>/Public/images/news3.png" alt="">
                    <div class="date">08/09/2023</div>
                    <h4>Lorem ipsum dolor sit amet, sect adipiscing elit. </h4>
                </div>
            </div>

            <div>
                <div class="item">
                    <img src="<?= $theme_uri; ?>/Public/images/news4.png" alt="">
                    <div class="date">08/09/2023</div>
                    <h4>Lorem ipsum dolor sit amet, sect adipiscing elit. </h4>
                </div>
            </div>

            <div>
                <div class="item">
                    <img src="<?= $theme_uri; ?>/Public/images/news5.png" alt="">
                    <div class="date">08/09/2023</div>
                    <h4>Lorem ipsum dolor sit amet, sect adipiscing elit. </h4>
                </div>
            </div>
            <div>
                <div class="itemLoadMore">
                    <button class="loadMoreNews">XEM THÊM ↓</button>
                </div>
            </div>
        </div>

    </div>
</div>


<?php get_footer(); ?>