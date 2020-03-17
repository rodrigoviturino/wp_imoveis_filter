<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://rodrigoviturino.com.br/webimoveis
 *
 * @package WordPress
 * @subpackage Imoveis_Company
 * @since 1.0
 * @version 1.0
 */
    
    get_header();
    
?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <div class="container">
        <h1><?php the_title(); ?> </h1>
        <?php the_content(); ?>
    </div>

<?php endwhile; else : ?>

    <div class="container">
        <p> <?php _e('Sorry, no posts matched your criteria.'); ?> </p>
    </div>

<?php endif; ?>


<?php get_footer(); ?>
