<?php get_header(); ?>
<div class='mint-bg'>
  <div class='container'>
	    <div class='banner row'>
	  		<div class='span8 blog-row'>
		    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

						<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

						<div class="entry group">
							<a href="<?php the_permalink() ?>"><?php 
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							  the_post_thumbnail('thumbnail', array('class' => 'alignleft'));
							} 
							?></a>
							<?php the_excerpt(); ?>
						</div>

						<footer class="postmetadata clearfix">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>" class="read-more btn">read more</a>
							Categories: <?php the_category(', ') ?> <br>
							<?php comments_popup_link('No Comments', '1 Comment &#187;', '% Comments &#187;'); ?>
						</footer>

					</article>
				
				<?php endwhile; ?>

				<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>
				<?php else : ?>
				<h2>Not Found</h2>
				<?php endif; ?>
				</div><!-- /spa8 -->
				<div class='span4'>
				<?php get_sidebar(); ?>
				</div>

    </div><!-- /.row .banner -->
  </div><!-- /container -->
</div><!-- /mint-bg -->

<?php get_footer(); ?>