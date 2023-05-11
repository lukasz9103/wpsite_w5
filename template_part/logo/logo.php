<?php
$custom_logo_id = get_theme_mod('custom_logo');
$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
if (has_custom_logo()) :
  echo '<a href="' . get_bloginfo('url') . '">
            <img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" width="' . $logo[1] . '" height="' . $logo[2] . '" class="img-fluid">
          </a>';
else:
  echo '<h1><a href="' . get_bloginfo('url') . '">' . get_bloginfo('name') . '</a></h1>';
endif;
?>