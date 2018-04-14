<h3 class="post-title">
  <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
</h3>

<small>Geposted am <?php the_time("F j, Y"); ?></small>

<p><?php the_content(); ?> </p>

<div class="thumbnail-img"><?php the_post_thumbnail('special-thumbnail'); ?></div>

<hr>
