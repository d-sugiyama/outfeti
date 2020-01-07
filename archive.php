<!DOCTYPE html>
<html lang="ja">

    <head>
        <?php get_template_part('assets/php/template/head'); ?>
        <?php wp_head(); ?>
    </head>

    <body>

        <?php get_header(); ?>

        <div class="container-fuild">
            <div class="row">

                <!-- Menu -->
                <div class="col-lg-2 d-none d-lg-block mw-100 bg-home bg-<?php echo esc_html(get_post_type_object(get_post_type())->name); ?> sidenav">
                    <?php get_template_part('assets/php/template/sidenav'); ?>
                </div>
                <!-- /Menu -->

                <!-- Main -->
                <div class="col-12 col-lg-10 mw-100 bg-main main-content">
                    <?php get_template_part('assets/php/template/main-archive'); ?>
                    <?php get_footer(); ?>
                </div>
                <!-- /Main -->

            </div>
        </div>

        <?php wp_footer(); ?>

    </body>

</html>