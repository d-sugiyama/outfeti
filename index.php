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

                <!-- Main -->
                <div class="col-12 mw-100 bg-main main-content">
                    <?php get_footer(); ?>
                </div>
                <!-- /Main -->

            </div>
        </div>

        <?php wp_footer(); ?>

    </body>

</html>