<?php 
global $theme_uri;
$post_id = isset( $args['post_id']) ? $args['post_id'] : get_the_id();
?>

<?php 
$categories = get_terms( array(
    'taxonomy' => 'product_cat',
    'hide_empty' => false,
) );
?>

<?php if (count($product_cat)) : ?>
<section class="categories">
    <div class="button-tab">
        <button type="button" class="btn-daMun"><img src="./Public/images/data/spChoDaMun.svg" alt=""> Sản phẩm cho da
            mụn</button>

        <button type="button" class="btn-daNam btn-style"><img src="./Public/images/data/spChoDaNam.svg" alt=""> Sản
            phẩm
            cho da nám</button>

        <button type="button" class="btn-spDuongTrang btn-style"><img src="./Public/images/data/spDuongTrang.svg"
                alt="">
            Sản phẩm dưỡng trắng da</button>

        <button type="button" class="btn-sapXep">Sắp xếp theo <img src="./Public/images/Icon-xapXep.svg"
                alt=""></button>
    </div>
</section>
<?php endif; ?>
