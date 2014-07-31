<?php get_header(); ?>

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
          <h3>Quartzburg Gold, LP - Phase 2 Projects</h3>
          <p>Please <a href="/documents/" id="login-btn">Sign In</a> to view our Documents</p>
          <div class="row">
            <div class="large-4 medium-4 columns">
              <p><a href="/documents/">Phase 2 Documents &rarr;</a><br />Download the latest documentation for all of our Phase 2 Projects.</p>
            </div>
            <div class="large-4 medium-4 columns">
              <p><a href="/media/">Project Media &rarr;</a><br />View Photos and Videos of our projects current progress.</p>
            </div>
            <div class="large-4 medium-4 columns">
              <p><a href="http://idahostateregionalcenter.com">Idaho State Regional Center &rarr;</a><br />Quartzburg Gold, LP is associated with Idaho State Regional Center. Please visit <a href="http://idahostateregionalcenter.com">ISRC</a> for more information about registering with us.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

   <div class="row">
     <div class="large-12 columns">
          <div data-alert class="alert-box secondary radius">
          By using this site you are agreeing to our <a href="#" data-reveal-id="myModal">Terms and Conditions</a>
          <a href="#" class="close">&times;</a>
        </div>
     </div>
   </div>

    <div id="myModal" class="reveal-modal" data-reveal>
      <?php get_template_part('parts/content', 'terms'); ?>
      <a class="close-reveal-modal">&#215;</a>
    </div>

<?php get_footer(); ?>

