<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title( '|', true, 'right'  ); ?>Quartzburg Gold - Phase 2 Projects</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/stylesheets/app.css" />
    <script src="<?php echo get_stylesheet_directory_uri() ?>/bower_components/modernizr/modernizr.js"></script>
    <?php wp_head(); ?>
  </head>
  <body <?php echo body_class($class); ?>>

  <div class="page-wrap">

  <nav class="top-bar" data-topbar>
    <ul class="title-area">
      <li class="name">
        <h1><a href="/" title="home">Quartzburg Gold, LP</a></h1>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
    </ul>

    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <ul class="right">
        <li><a href="/documents/">Documents</a></li>
        <li class="has-dropdown">
          <a href="/media/">Media</a>
          <ul class="dropdown">
            <li><a href="/media/photos/">Photos</a></li>
            <li><a href="/media/videos">Videos</a></li>
          </ul>
        </li>
        <?php if ( is_user_logged_in() ) { ?>
        <li class="active"><a href="<?php echo wp_logout_url( '/' ); ?>">Sign Out</a></li>
        <?php } else { ?>
        <li class="active"><a href="/documents/" id="login-btn-nav">Sign In</a></li>
        <?php } ?>
      </ul>
    </section>
  </nav>

  <header class="main-header">
    <div class="row">
      <div class="large-12 columns">
        <div class="logo-title">
          <h1>Quartzburg Gold</h1>
        </div>
      </div>
    </div>
  </header>