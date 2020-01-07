<div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="card">
    <?php
        // カスタム投稿名
        $post_type = esc_html(get_post_type_object(get_post_type())->name);
        // カスタム分類名
        $taxonomy = $post_type.'_cat';

        $args = array(
            // 投稿記事がないタームも取得
            'hide_empty' => false
        );

        // カスタム分類のタームのリストを取得
        $terms = get_terms( $taxonomy , $args );
        if ( count( $terms ) != 0 ) {

            foreach ( $terms as $term ) {
            
                $term = sanitize_term( $term, $taxonomy );
                $term_name = $term -> name;
                $term_slug = $term -> slug;

                // カードヘッダー
                ?>
                <div class="card-header" role="tab" id="heading<?php echo esc_html($term_slug); ?>">
                    <h5 class="mb-0">
                        <a class="text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapse<?php echo esc_html($term_slug); ?>" role="button" aria-expanded="true" aria-controls="collapse<?php echo esc_html($term_slug); ?>">
                        <?php echo esc_html($term_name); ?>

                        </a>
                    </h5>
                </div>

                <?php
                    $wp_query = new WP_Query();
                    $param = array(
                        'posts_per_page' => '-1',
                        'post_type' => $post_type,
                        'tax_query' => array(
                            array(
                                'taxonomy' => $taxonomy,
                                'field' => 'slug',
                                'terms' => $term_slug,
                            ),
                        ),
                        'post_status' => 'publish',
                        'orderby' => 'ID',
                        'order' => 'DESC'
                    );
                    $wp_query->query($param);
                    if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
                ?>
                <div id="collapse<?php echo esc_html($term_slug); ?>" class="collapse" role="tabpanel" aria-labelledby="heading<?php echo esc_html($term_slug); ?>" data-parent="#accordion">
                    <div class="card-body">
                        <?php the_title(); ?>
                    </div><!-- /.card-body -->
                </div><!-- /.collapse -->
                <?php endwhile; endif; wp_reset_query();?>
                <?php
            }        
        }
    ?>			
    </div><!-- /.card -->
</div><!-- /.accordion -->
