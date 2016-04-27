<?php

/*
	Template Name: The Studio
*/

get_header();  ?>

<div class="main">
  <div id="theStudio" class="projectsContainer">
  	<div class="whatWeDo">
  		  <?php // Start the loop ?>
          <?php $whatWeDoContent = new WP_Query(array(
           'post_type' => 'what_we_do',
          )); ?>
          <?php if ( $whatWeDoContent->have_posts() ) : ?>
          <?php while ( $whatWeDoContent->have_posts() ) : $whatWeDoContent->the_post(); ?>
                <p> <?php the_content(); ?> </p>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php else:  ?>
          <?php endif; ?>
  	</div>

    <div class="studioVideo">
      <video class="videoLoop" autoplay loop="true" poster="<?php echo get_template_directory_uri(); ?>/img/loop6poster.png">
        <source src="<?php echo get_template_directory_uri(); ?>/img/video/Loop6.mp4" type="video/mp4">
        <source src="<?php echo get_template_directory_uri(); ?>/img/video/Loop6.webm" type="video/webm">
      </video>
    </div>

  	<div class="services">
			<?php // Start the loop ?>
	        <?php $servicesContent = new WP_Query(array(
	         'post_type' => 'services',
	        )); ?>
	        <?php if ( $servicesContent->have_posts() ) : ?>
	        <?php while ( $servicesContent->have_posts() ) : $servicesContent->the_post(); ?>
                  <p> <?php the_content(); ?> </p>
	        <?php endwhile; ?>
	        <?php wp_reset_postdata(); ?>
	        <?php else:  ?>
	        <?php endif; ?>
          <div class="servicesBoxContainer clearfix">
            <div class="servicesContent servicesBox">
            <h2>Content</h2>
            <h3><i class="fa fa-circle"></i></h3>
            <p>BRANDED FILMS</p>
            <p>TOURISM + LIFESTYLE CONTENT</p>
            <p>PRODUCT LOOKBOOKS</p>
            </div>

            <div class="servicesMarketing servicesBox">
            <h2>Marketing</h2>
            <h3><i class="fa fa-circle"></i></h3>
            <p>BRAND DEVELOPMENT</p>
            <p>WEBSITE DESIGN + DEVELOPMENT</p>
            <p>CAMPAIGN CREATIVE + EXECUTION</p>
            </div>

            <div class="servicesStrategy servicesBox">
            <h2>Strategy</h2>
            <h3 class="dash"><i class="fa fa-minus fa-2x"></i></h3>
            <p>Campaign Strategy</p>
            <p>Content Strategy</p>
            <p>Social Strategy</p>
            <p>Partnership Strategy</p>     
            </div>
          </div>
          
          <div class="ingenuityParties servicesBox">
            <h2>Ingenuity Parties</h2>
            <a href="mailto:info@dotdotdash.ca"><img src="<?php echo get_template_directory_uri(); ?>/img/IP-logo-04.png" alt=""></a>
            <h3>The unprocess way to unearth ideas that<br>earn attention and investment</h3>
          </div>
    </div>


    <div class="aboutTeam">
      <div class="inner">
        <div class="innerContent">
          
      <h2>The Team</h2>

      <p><a href="https://www.linkedin.com/profile/view?id=AAkAAANqdxgBbKdJU1O6U-YxxRVGs-G95HVlSF4&authType=NAME_SEARCH&authToken=6z_B&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A57308952%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1444938641250%2Ctas%3Ablaine%20pearson">Blaine Pearson</a> and <a href="https://www.linkedin.com/profile/view?id=AAkAAAEDRFMBHxkhoQ6Tzb8mLOWbgq-966jd8vE&authType=NAME_SEARCH&authToken=haRD&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A16991315%2CauthType%3ANAME_SEARCH%2Cidx%3A1-2-2%2CtarId%3A1444938689527%2Ctas%3Ajason%20van%20bru">Jason Van Bruggen</a> opened the doors of DOT DOT DASH to give agency to good.</p>
      <p>Our early success building solutions for social and environmental initiatives near to our heart emboldened us to leave our award winning careers in the big agency world to found an independent creative studio.</p>
      <p>We're excited to be leading a team of multi-talented creatives based in Toronto, Canada.</p>
      <p>Better Together.</p>
      <img src="<?php echo get_template_directory_uri(); ?>/img/onePercentLogo.png" alt="">
        </div>
      </div>
    </div>

  	<div class="theTeam">	
      <div class="grid team-grid">
        <div class="grid-sizer team-grid-sizer"></div>
        <div class="gutter-sizer"></div>
        <?php // Start the loop ?>
        <?php $teamContent = new WP_Query(array(
          'post_type' => 'team_member',
          )); ?>
          <?php if ( $teamContent->have_posts() ) : ?>
            <?php while ( $teamContent->have_posts() ) : $teamContent->the_post(); ?>
              <div class="grid-item team-grid-item">
                <div class="teamInfo">
                  <div class="inner">
                    <div class="innerContent">
                      <h2><?php the_title(); ?></h2>
                      <p><?php the_content(); ?> </p>
                    </div>
                  </div>
                </div>
                <div class="teamPhoto">
                  <?php the_post_thumbnail("full"); ?>
                </div>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php else:  ?>
          <?php endif; ?>
        </div> <!-- /.grid -->
    </div>
    </div>
  	</div>


    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <?php endwhile; // end the loop?>
 </div> <!-- projectsContainer ends here -->
</div> <!-- /.main -->

<?php get_footer(); ?>