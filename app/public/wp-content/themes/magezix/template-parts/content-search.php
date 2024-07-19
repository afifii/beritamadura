<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Magezix
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('tx-post-item tx-post format-standard mt-50'); ?>>
	<div class="post-thumb">
		<a href="<?php the_permalink();?>">
			<?php 
			if(has_post_thumbnail()){
				the_post_thumbnail('magezix-991x524');
			}        
		?>
        </a>
		<div class="post-date">
			<?php echo wp_kses( get_the_date('d'), true ); ?>
			<br> <span><?php echo wp_kses( get_the_date('M'), true ); ?></span>
			
		</div>
	</div>
	<div class="post-content mt-25">
		<ul class="post-tags post-tags--2 ul_li mb-15">
			<li><span><?php esc_html_e( '# Tags', 'magezix' );?></span></li>
			<?php magezix_entry_tags_list();?>
		</ul>    
		<h2 class="post-title border-effect"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		<ul class="post-meta post-meta--4 style-2 ul_li mt-10">
			<li>
				<div class="post-meta__author ul_li">
					<div class="avatar">
						<?php magezix_main_author_avatars(22);?>
					</div>                
					<span><?php the_author()?> 
					<?php 
					if(function_exists('magezix_ready_time_ago')){ ?>
						/ <span class="year"><?php echo magezix_ready_time_ago();?></span>
					<?php }
					?>                
					</span>
				</div>
			</li>
			<li><i class="far fa-comment"></i><?php echo esc_attr(get_comments_number());?></li>
			<li><i class="far fa-clock"></i><?php echo magezix_reading_time();?></li>
		</ul>
		<?php the_excerpt();?>
	</div>	
</article><!-- #post-<?php the_ID(); ?> -->
