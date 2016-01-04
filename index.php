<?php

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	<article class="post">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class = "post-info"><?php the_time('F jS, Y g:i a'); ?> | Posted in 
			<?php 
				$categories = get_the_category();
				$separator = ", ";
				$output = '';

				if($categories)
				{
					foreach($categories as $category){
						$output .= '<a href = "' . get_category_link($category->term_id) . '">' . $category -> cat_name . '</a>' . $separator;
					}

					echo trim($output, $separator);
				}
			?>
		</p>

		<?php the_post_thumbnail('post-banner'); ?>

		<p><?php the_content(); ?></p>
	</article>
	
	<?php endwhile;
	
	else :
		echo '<article><h2>Come quick missus! The well&rsquo;s gone bone dry!</h2>
				<p>Sorry, I didn&rsquo;t find any content.</p></article>';
	
	endif;
	
get_footer();

?>