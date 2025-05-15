<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
</head>
<?php get_template_part('/parts/body'); ?>

</html>