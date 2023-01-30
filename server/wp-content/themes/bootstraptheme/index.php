<?php
/*
* Main template file
*
*
@package bootstraptheme
@since 2.0
*/

get_header();
get_template_part('template-parts/banner', 'title');
?>

<div class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 overflow-hidden">

                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        get_template_part('template-parts/content', 'excerpt');
                    }
                    bootstrap_pagination();
                } else {
                    get_template_part('template-part/content', 'none');
                }
                ?>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>