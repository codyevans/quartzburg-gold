<?php 

/*
Template Name: Media Photos
*/

 ?>
<?php get_header(); ?>
<?php the_post(); ?>

    <header class="main-header">
      <div class="row">
        <div class="large-12 columns">
          <div class="logo-title">
            <h1>Quartzburg Gold</h1>
          </div>
        </div>
      </div>
    </header>

    <div class="row">
      <div class="large-12 columns">
        <div class="panel">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </div>
      </div>
    </div>
    
<?php get_footer(); ?>