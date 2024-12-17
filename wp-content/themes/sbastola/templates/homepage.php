<?php
/**
 * Template name: Homepage
 */
get_header();
?>
    <!-- Main Content -->
    <div class="site-content">
        <!--        <aside class="widget-area left-widget-area">-->
        <!--            <h3>Categories</h3>-->
        <!--            <ul class="widget-list">-->
        <!--                <li><a href="#">Tech</a></li>-->
        <!--                <li><a href="#">Business</a></li>-->
        <!--                <li><a href="#">Lifestyle</a></li>-->
        <!--            </ul>-->
        <!--          -->
        <!--        </aside>-->

        <main class="site-main">

            <!-- Blog Posts -->
			<?php
			$sb_query = new WP_Query( array( 'post_type' => 'post' ) );
			if ( $sb_query->have_posts() ) :
				while ( $sb_query->have_posts() ) :
					$sb_query->the_post();
					?>
                    <article class="post">
                        <div class="post-content">
                            <h2 class="post-title"><?php the_title() ?></h2>
                            <p>
                                <strong>Author:</strong> <?php the_author() ?>
                                |
                                <strong>Date:</strong> <?php if ( get_the_date( 'Y' ) == date( 'Y' ) ):
									the_date( ' M d' );
								else:
									the_date( 'M d, Y' );
								endif;
								?>
                                |
                                <strong>Category:</strong> <?php the_category( ', ' ); ?>
                            </p>
							<?php the_tags( '<p><strong>Tags:</strong> ', ', ', '</p>' ); ?>
							<?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="more-link">Read More</a>
                        </div>
						<?php if ( has_post_thumbnail() ) : ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail( 'medium' ); ?>
                                </a>
                            </div>
						<?php endif; ?>
                    </article>
				<?php
				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>


        </main>

        <aside class="widget-area right-widget-area">
			<?php
			//        get_sidebar()
			get_search_form();
			?>
            <h3>Popular Posts</h3>
            <ul class="widget-list">
                <li><a href="#">How to build a website</a></li>
                <li><a href="#">Top tech trends 2024</a></li>
                <li><a href="#">Improve your coding skills</a></li>
            </ul>
            <h3>Categories</h3>
            <ul class="widget-list">
                <li><a href="#">Tech</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Lifestyle</a></li>
            </ul>
        </aside>
    </div>

<?php
get_footer();