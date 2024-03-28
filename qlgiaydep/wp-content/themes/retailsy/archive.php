<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Retailsy
 */

get_header(); 
?>
<div class="blog-details mt-default">
	<div class="jcs-container">
		<div class="complete-page-lsb jcs-row align-items-start g-30 blog-details-page">
			<div id="st-primary-content" class="<?php esc_attr(retailsy_blog_column_layout()); ?>">
				<div class="blog-page main">
					<div class="jcs-container">
						<div class="jcs-row align-items-start g-30">
							<?php if( have_posts() ): ?>
				
								<?php while( have_posts() ) : the_post();
								
										get_template_part('template-parts/content/content','page'); 
										
								endwhile; ?>
								
							<?php else: ?>
							
								<?php get_template_part('template-parts/content/content','none'); ?>
								
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<?php  get_sidebar(); ?>
		</div>
	</div>
</div>	
<?php get_footer(); ?>
