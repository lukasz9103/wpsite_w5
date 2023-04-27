<?php
if (is_page() || is_single()):
  $og_title = get_the_title();
  $og_url = get_the_permalink();
  $og_desc = get_the_excerpt();
  $og_image = get_the_post_thumbnail_url();
else :
  $og_title = get_bloginfo('name');
  $og_url = get_bloginfo('url');
  $og_desc = get_bloginfo('description');
  $og_image = get_bloginfo('template_url') . '/dist/img/facebook.jpg';
endif;
?>
<meta property="og:url" content="<?php echo $og_url; ?>"/>
<meta property="og:type" content="article"/>
<meta property="og:title" content="<?php echo $og_title; ?>"/>
<meta property="og:description" content="<?php echo $og_desc; ?>"/>
<meta property="og:image" content="<?php echo $og_image; ?>"/>
