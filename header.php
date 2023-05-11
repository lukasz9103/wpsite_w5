<?php
/* global variables */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <!-- meta open graph -->
  <?php include_once('includes/opengraph.php'); ?>
  <!-- favicons -->
  <?php include_once('includes/favicons.php'); ?>
  <!-- deklaracja dostępności -->
  <meta name="deklaracja-dostępności" content="<?php bloginfo('url') ?>/deklaracja-dostepnosci"/>
  <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<header>
  <section class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-12 d-flex justify-content-end">
          <ul class="header_top__social-media d-flex list-unstyled">
            <li><a class="ms-2" href="https://www.linkedin.com/in/%C5%82ukasz-bogacz/" target="_blank">LinkedIn</a></li>
            <li><a class="ms-2" href="https://github.com/lukasz9103" target="_blank">GitHub</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-3">
        <?php get_template_part('template_part/logo/logo'); ?>
      </div>
      <div class="col-md-9">
        <?php get_template_part('template_part/menu/menu'); ?>
      </div>
    </div>
  </div>
</header>
