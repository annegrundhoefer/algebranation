  <?php get_header(); ?>
  <div class="wrap full">
    <div class="big-image short">
        <div class="overlay">
            <div class="wrap">
                <h1>In the News</h1>
                <h3>We give students the EDGE they need with their studies.</h3>
            </div>
        </div>
    </div>
</div>




        <div class="wrap mobile-padded">
            <div class="col-75">

            <?php 

            $args = array( 'posts_per_page' => -1 );

            $wp_query = new WP_Query($args);

            ?>
            
            <?php if ($wp_query->have_posts()): while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry clearfix">
                        <div class="entry-image">
                        <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                            
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> by <?php the_author_meta('first_name'); ?>">
                                    <?php the_post_thumbnail('large'); // Fullsize image for the single post ?>
                                    </a>
                                    <?php endif; ?>
                        </div>
                        <div class="entry-c">
                            <div class="entry-title">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="fa fa-calendar"></i><?php the_date(); ?></li>
                            </ul>
                            <div class="entry-content">
                                <p><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>"class="more-link">Read More</a>
                            </div>
                        </div>
                    </div>

                
                </article>
                <!-- /article -->

            <?php endwhile; ?>

            <?php else: ?>

            <?php endif; ?>

        </div><!-- #posts end -->


        <div class="col-25 ml-10">
            <div class="newsletter">
                <h3>Subscribe to our newsletter</h3>
            </div>
             <div class="press">
             <h3>Here is some press</h3>
             <ul>
                <li><a href="#">This is a press link</a></li>
                <li><a href="#">This is a press link</a></li>
                <li><a href="#">This is a press link</a></li>
                <li><a href="#">This is a press link</a></li>
               
                
            </div>
        </div>
</div>
<div class="clear space mobile-hide"></div>







<?php get_footer(); ?>