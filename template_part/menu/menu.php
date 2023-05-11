<?php $mainMenu = wp_get_nav_menu_name('header-menu'); ?>
<?php wp_nav_menu(['container' => 'nav', 'container_id' => 'main-menu', 'container_aria_label' => $mainMenu, 'depth' => 3, 'theme_location' => 'header-menu', 'items_wrap' => '<h2 class="visually-hidden">' . $mainMenu . '</h2><ul class="%2$s">%3$s</ul>']); ?>
