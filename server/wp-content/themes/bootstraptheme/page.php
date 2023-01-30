<?php

/**
 * The template for displaying page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage bootstraptheme
 * @since bootstraptheme 2.0
 */

get_header();
get_template_part('template-parts/banner', 'title')
?>
<div class="content-area">
    <div class="container">
        <div class="row">
            <?php if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('large', array(
                            'class' => 'img-fluid mb-3'
                        ));
                    }
            ?>
                    <div class="col-md-8 offset-md-2 overflow-hidden mt-5">

                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <?php the_content(); ?>
                        </article>

                    </div>
            <?php
                }
            } else {
                get_template_part('template-parts/content', 'none');
            }
            ?>
        </div>
    </div>
</div>

<?php
get_footer();
