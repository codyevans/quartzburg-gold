<?php 

/*
Template Name: Media
*/

get_header();
the_post();
 ?>
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
      <div class="lare-12 columns">
        <div class="row">
          <div class="large-6 columns">
            <a class="button expand radius" href="/media/photos/">View Photos &rarr;</a>
          </div>
          <div class="large-6 columns">
            <a class="button expand radius" href="/media/videos/">View Videos &rarr;</a>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>