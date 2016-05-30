<!DOCTYPE html>
<html>
<head>
    <title>IPL:(画像処理研究室)</title>
    <meta charset="UTF-8">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hover-min.css">
    <link href='https://fonts.googleapis.com/css?family=Fredericka+the+Great' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>
  <nav id = "nav" class="navbar navbar_W navbar-inverse navbar-fixed-top navbar-expanded">
          <div class="container">
              <div>
                  <a class="navbar-brand page-scroll logo" href="<?php echo get_home_url(); ?>">
                      画像処理研究室
                    </a>
              </div>
              <?php
             wp_nav_menu ( array (
             'menu' => 'primary',
             'theme_location' => 'primary',
             'depth' => 2,
             'container' => 'div',
             'container_class'  => 'collapse navbar-collapse',
             'container_id'  => 'bs-example-navbar-collapse-1',
             'menu_class' => 'nav navbar-nav navbar-right',
             'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
             'walker' => new wp_bootstrap_navwalker()
              ));
              ?>
          </div>
      </nav>
