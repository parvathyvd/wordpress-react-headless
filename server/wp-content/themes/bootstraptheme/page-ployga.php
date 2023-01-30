<?php

/**
 * Template Name: Polyga Page  
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage bootstraptheme
 * @since bootstraptheme 2.0
 */

get_header();
get_template_part('template-parts/banner', 'title');

?>
<div class="content-area">
    <div class="container">
        <div class="row">
            <?php if (has_post_thumbnail()) { ?>
                <img src="<?php echo the_post_thumbnail('small', array(
                                'class' => 'img-fluid mb-3'
                            )) ?>>
            <?php }
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_content();
                }
            }
            ?>
            <?php the_field('about_heading'); ?>
            <?php the_field('about_description'); ?>
            <?php if (get_field('about_image')) : ?>
                <img src=" <?php the_field('about_image'); ?> alt="test">
            <?php endif; ?>
            <?php
            $colors = get_field('choose_color');
            echo var_dump($colors); ?>
            <?php echo implode(', ', $colors);
            echo $colors[0];
            ?>
            <button style="color: <?php echo $colors[0]; ?>">hello</button>

            <?php
            $args = array('post_type' => 'natures', 'posts_per_page' => 10);
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="col-md-6">
                        <?php var_dump(get_post_permalink(the_ID()));
                        ?>
                        <a href="<?php echo get_post_permalink(the_ID()) ?>">
                            <h2><?php the_title(); ?></h2>
                        </a>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            <?php else :  ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>

        </div>
    </div>
</div>

<?php
get_footer();
