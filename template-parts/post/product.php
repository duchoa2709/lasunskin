<?php 
$post_id = isset( $args['post_id']) ? $args['post_id'] : get_the_id();
?>

    <div class="col infoProduct">
        <div style="width: 18rem;">
            <div class="info">
                <div class="new"></div>
                <div class="discount"></div>
            </div>
            <div class="img_product card-img-top">
                <?= get_the_post_thumbnail( $post_id,'medium' ); ?>
            </div>
            <div class="card-body">
                <h5 class="card-title"><a href="<?= get_the_permalink($post_id); ?>"><?= get_the_title(); ?></a></h5>
                <p class="card-text"><?= get_the_excerpt($post_id); ?></p>
            </div>
        </div>
    </div>