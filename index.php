<?php get_header(); ?>
<?php the_post(); ?>

    <div class="row">
      <div class="large-12 columns">
        <div class="panel">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </div>
      </div>
    </div>

    <div id="myModal" class="reveal-modal" data-reveal>
      <?php get_template_part('parts/content', 'terms'); ?>
      <a class="close-reveal-modal">&#215;</a>
    </div>

<?php get_footer(); ?>