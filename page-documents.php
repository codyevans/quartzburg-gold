<?php 

/*
Template Name: Documents
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
    </div>

   <?php if ( !is_user_logged_in() ) { ?>

   <?php $args = array(
        'echo'           => true,
        'redirect'       => site_url( '/documents/' ), 
        'form_id'        => 'loginform',
        'label_username' => __( 'Username' ),
        'label_password' => __( 'Password' ),
        'label_remember' => __( 'Remember Me' ),
        'label_log_in'   => __( 'Sign In ➞' ),
        'id_username'    => 'user_login',
        'id_password'    => 'user_pass',
        'id_remember'    => 'rememberme',
        'id_submit'      => 'wp-submit',
        'remember'       => false,
        'value_username' => NULL,
        'value_remember' => false
    ); ?> 
    
    <div class="row" id="login-form">
      <div class="large-6 columns">
         <?php wp_login_form( $args ); ?>
       </div>
    </div> 

  <?php } ?> 



<?php get_footer(); ?>