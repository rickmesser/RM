<?php get_header(); ?>

			
		<article class="post container-fluid" id="post-<?php the_ID(); ?>">
			<div class="row-fluid">
				
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="span9">
				<div class="pad">
					<h2 class="page-title"><?php the_title(); ?></h2>

					<?php the_content(); ?>

					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				</div>
			</div>
			<?php endwhile; endif; ?>
			<?php get_sidebar(); ?>
			</div>
		
		</article>

<?php get_footer(); ?>
