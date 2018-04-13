<!doctype html>
<html>
    
<head>
    <meta charset="utf-8">
    <title>Lagerplanen.ch Localhost</title>
    <?php wp_head();?>
</head>
    
<?php

      if (is_front_page()) {
        $awesome_classes = array("awesome_class", "my_class");
      } else {
        $awesome_classes = array("no-awesome_class");
      }

     ?>

<body <?php body_class($awesome_classes) ?>> 
    
    <!-- site header-->
    <header class="site-header">
        
        <h1 class="title"><a href="<?php echo home_url();?>"><?php bloginfo('name'); ?></a></h1>
        
        <nav class="site-nav">
            <?php wp_nav_menu(array("theme_location"=>"primary")); ?>
        </nav>
        <hr class="no-padding">

        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
    
    </header>
    <!-- /site header-->