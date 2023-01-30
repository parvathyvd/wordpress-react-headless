<?php

/**
 * Template Name: Test Page  
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage bootstraptheme
 * @since bootstraptheme 2.0
 */

$color = get_field('choose_color');
$flavour = get_field('choose_flavour');
$relationships =  get_field('relationships');
get_header();
get_template_part('template-parts/banner', 'title');

?>

<div class="content-area">
    <div class="container">
        <div class="row">
            <?php if ($color) : ?>
                <?php echo $color['value']; ?>
            <?php endif; ?>
            <?php if ($flavour) : ?>
                <?php foreach ($flavour as $flavor) {
                    echo $flavor;
                } ?>
                <?php echo implode(', ', $flavour); ?>
            <?php endif; ?>
            <?php foreach ($relationships as $realtion) {
            ?>
                <a href="<?php echo get_post_permalink($realtion->ID); ?>"><?php echo $realtion->post_title; ?></a>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>