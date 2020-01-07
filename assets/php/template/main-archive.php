<div>
<?php
    $wp_query = new WP_Query();
    $param = array(
        'posts_per_page' => '-1', //表示件数。-1なら全件表示
        'post_type' => esc_html(get_post_type_object(get_post_type())->name), //カスタム投稿タイプの名称を入れる
        'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
        'orderby' => 'ID', //ID順に並び替え
        'order' => 'DESC'
    );
    $wp_query->query($param);
    if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
?>
<div class="card">
    <a class="card-body" href="">
    <h5 class="card-title">
    <a href="<?php the_permalink(); ?>">
    <?php the_title(); ?>
    </a>
    </h5>
    <h5>
    <?php the_time('Y/m/d');?>
    </h5>
    </a>
    <label class="badge">
    <a href="#"><?php $terms = wp_get_object_terms($post->ID,esc_html(get_post_type_object(get_post_type())->name).'_cat'); foreach($terms as $term){echo $term->slug . ' ';} ?>　a</a>
    </label>            
</div>
<?php endwhile; endif; ?>
</div>