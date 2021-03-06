<?php get_header(); ?>

	<div class="container my-8 mx-auto">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>


						<?php
							 if ( wp_is_mobile() ) {
								$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false, '' );
							 } else {
								$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
							 }
						 ?>

							 <div class="relative bg-gray-800 hero">
								 <div class="w-100">
									 <div class="relative sm:overflow-hidden">
										 <?php if ( has_post_thumbnail() ) { ?>
										 <div class="absolute inset-0">
											 <img class="h-full w-full object-cover" src="<?php echo $img[0]; ?>" alt="">
											 <div class="absolute inset-0 opacity-20 bg-gradient-to-b from-black to-transparent mix-blend-multiply"></div>
										 </div>
										 <?php } ?>
										 <div class="relative px-4 sm:px-6 py-48 lg:py-52 lg:px-8 max-w-4xl mx-auto">

											 <article class="lead text-white text-center">
												<h1 class="text-6xl"><?php the_title(); ?></h1>
											 </article>

											 <div class="text-base mt-3 text-gray-100 text-center font-medium">
							 				<time datetime="<?php the_time('F jS, Y'); ?>">
							 					<?php the_time('F jS, Y'); ?>
							 				</time>
							 				</div>



										 </div>

									 </div>
								 </div>
							 </div>

							 <div class="site-container py-12">
					 			<article id="post-<?php the_ID(); ?>" <?php post_class('lead'); ?>>

					 				<div class="entry-content">
					 					<?php the_content(); ?>

					 				</div>

					 			</article>

					 		</div>

		<?php endwhile; ?>

	<?php endif; ?>

	</div>

<?php
get_footer();
