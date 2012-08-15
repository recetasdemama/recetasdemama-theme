<?php /*
Template for use with post thumbnails
Author: Francisco de Juan
*/ ?>
<?php 
	$postClasses = "box-news";
	global $i;
	if ( in_array($i, array(2, 5, 8) ) ) $postClasses .= " middle-box";
?>
<?php if ($related_query->have_posts()):?>
	<div class="clear"></div>
  <div id="related_posts"><h3>Recetas relacionadas</h3>
  	<?php
  	    $i = 1;
  	    while ($related_query->have_posts()) : $related_query->the_post();
  	      get_template_part('content-list', get_post_format());
  	      $i++;
  	    endwhile;
  	?>
  	<div class="clear"></div>
	</div>
<?php endif; ?>
