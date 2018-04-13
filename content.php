<h3 class="post-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>

<div class="thumbnail-img"><?php the_post_thumbnail("thumbnail"); ?></div>

<small>Posted on: <?php the_time("F j, Y"); ?> at <?php the_time("h:i"); ?> </small>

<p><?php the_content(); ?> </p>

<hr>
