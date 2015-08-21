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

<div class="wrap mobile-padded news">
    <div class="col-70">
        <?php

        $args = array( 'cat' => NEWS_CATEGORY_ID, 'posts_per_page' => -1 );

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
                        <div class="entry-meta clearfix">
                            <i class="fa fa-calendar"></i> <?php the_date(); ?>
                        </div>
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
    </div>

    <div class="sidebar col-25 ml-5">
        <div class="newsletter">
            <h3>Subscribe to our newsletter</h3>
    		<form class="form-horizontal" method="post" action="google-form-url">
    			<div class="form-group">
    				<div class="col-50">
    					<label for="name" class="control-label">Email Address</label>
    				</div>
    				<div class="col-300">
    					<input type="text" class="form-control" />
    				</div>
    				<div class="clear"></div>
    			</div>
    			<div class="form-group" style="text-align: center">
    				<input type="submit" class="btn blue" value="Subscribe" />
    			</div>
                <br />
    		</form>
        </div>

        <div class="press">
            <h3>Here is some press</h3>
            <ul>
                <li><a href="#">This is a press link</a></li>
                <li><a href="#">This is a press link</a></li>
                <li><a href="#">This is a press link</a></li>
                <li><a href="#">This is a press link</a></li>
            </ul>
        </div>
    </div>
    <div class="clear space mobile-hide"></div>
</div>

<?php get_footer(); ?>
