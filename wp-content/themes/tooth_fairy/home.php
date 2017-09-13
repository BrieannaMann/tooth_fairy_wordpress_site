<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<h1>Home.php</h1>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while(have_posts()):the_post(); ?>
		    	<div>
		                <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
		            <div class="journal-img width-100 flex vertical-direction space-between" style="background: url('<?php echo $backgroundImg[0]; ?>'); background-size:cover;">
		                <div class="journal-name white-font green-bkg flex flex-left padding-med">
		                    <h2> <?php the_title() ?> </h2>
		                </div>
		                <div class="journal-padding white-font green-bkg flex flex-right flex-align-right">
		                    <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / BY <?php the_author(); ?>
		                </div>
		            </div>
		            <div class="secondary-font padding-top-med">
		                <?php the_excerpt(); ?>
		            </div>
		            <div class="margin-10 flex padding-bottom-lg">
		                <?php echo '<a class="flex-center" href="' . get_permalink() . '"> '?>
		                <h6 class="black-border black-font button-padding">READ MORE -> </h6>
		                <?php echo '</a>'; ?>
		            </div>
		        </div>
		    <?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
