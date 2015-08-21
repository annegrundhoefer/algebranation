<?php
/**
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header();

if (!have_posts()) {
    require('page-home.php');
} else {
    ?>
    <div class="wrap padded">
        <?php
        while ( have_posts() ) {
            the_post();
        	?>
            <h1><?php the_title() ?></h1>
            <p><?php the_content() ?></p>
            <?php edit_post_link() ?>
            <?php
        }
        ?>
    </div>
    <div class="wrap padded"></div>
    <?php
}

get_footer();
