<?php get_header(); ?>
	<div class='container'>

    <div class="row span8">

  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
  			
  			<h1 class="entry-title"><?php the_title(); ?></h1>

  			<div class="entry-content">
  				
  				<?php the_content(); ?>

  				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
  				
  				<?php the_tags( 'Tags: ', ', ', ''); ?>
  			
  				<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

  			</div>
  			
  			<?php edit_post_link('Edit this entry','','.'); ?>
  			
  		</article>

  	<?php comments_template(); ?>

  	<?php endwhile; endif; ?>
    </div>

    <div class="row span2">
    <?php get_sidebar(); ?>
    </div>

	</div>
  
<?php get_footer(); ?>